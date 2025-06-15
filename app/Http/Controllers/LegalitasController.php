<?php

namespace App\Http\Controllers;

use App\Models\UsahaUser;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class LegalitasController extends Controller
{
    public function viewLegalitasForm()
    {
        return view('UserLegalitas.formUserLegalitas');
    }

    public function storeLegalitasForm(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nama_usaha' => 'required|string|max:255',
                'tipe' => [
                    'required',
                    'string',
                    Rule::in(['UMKM', 'CV', 'PT']),
                ],
                'model' => [
                    'required',
                    'string',
                    Rule::in(['Produksi Sendiri', 'Distributor', 'Jasa/Layanan']),
                ],
                'sektor' => [
                    'required',
                    'string',
                    Rule::in([
                        'makanan',
                        'pertanian',
                        'peternakan',
                        'perikanan',
                        'manufaktur',
                        'keuangan',
                        'ti',
                        'logistik',
                        'pendidikan',
                        'fesyen',
                        'jasa',
                    ]),
                ],
            ]);

            $sektorMap = [
                'makanan' => 'Makanan',
                'pertanian' => 'Pertanian',
                'peternakan' => 'Peternakan',
                'perikanan' => 'Perikanan',
                'manufaktur' => 'Industri Manufaktur',
                'keuangan' => 'Jasa Keuangan',
                'ti' => 'Teknologi Informasi dan Komunikasi',
                'logistik' => 'Jasa Logistik',
                'pendidikan' => 'Pendidikan',
                'fesyen' => 'Fesyen dan Tekstil',
                'jasa' => 'Jasa',
            ];

            $usaha = UsahaUser::create([
                'user_id' => Auth::user()->id,
                'nama_usaha' => $validatedData['nama_usaha'],
                'tipe' => $validatedData['tipe'],
                'model' => $validatedData['model'] === 'Jasa/Layanan' ? 'Jasa' : $validatedData['model'],
                'sektor' => $sektorMap[$validatedData['sektor']],
            ]);

            return redirect()->route('legalitas', $usaha)->with('success', 'Rekomendasi legalitas berhasil dikirim!');
        } catch (ValidationException $e) {
            return back()
                ->with('error', 'Validasi gagal. Mohon cek input Anda.')
                ->withErrors($e->validator)
                ->withInput();
        } catch (\Exception $e) {
            Log::error('Legalitas form error: ' . $e->getMessage());

            return back()
                ->with('error', 'Terjadi kesalahan saat menyimpan data. Silakan coba lagi nanti.')
                ->withInput();
        }
    }

    public function viewRecomendedLegalitas($id)
    {

        $userUsaha = UsahaUser::findOrFail($id);
        $json = json_decode(file_get_contents(public_path('legalitas_umkm_data.json')), true);
        $result = collect($json['legalitas'])
            ->firstWhere('bidang_usaha', $userUsaha->sektor)['jenis_usaha'] ?? [];


        $jenis = collect($result)
            ->firstWhere('tipe', $userUsaha->tipe)['model_usaha'] ?? [];


        $model = collect($jenis)
            ->firstWhere('model', $userUsaha->model);


        return view('UserLegalitas.RecomendLegalitas', [
            'izin_wajib' => $model['izin_wajib'] ?? [],
            'izin_opsional' => $model['izin_opsional'] ?? [],
            "id" => $userUsaha->id,
            "status" => $userUsaha->staus_izin
        ]);
    }

    public function update(Request $request, $id)
    {
        $usaha = UsahaUser::findOrFail($id);

        $usaha->status_izin = $usaha->status_izin === 'Lengkap' ? 'Belum Lengkap' : 'Lengkap';
        $usaha->save();

        return redirect()->route('home')
            ->with('success', 'Status izin berhasil diperbarui untuk Status usaha. Terimakasih 😀');
    }
}
