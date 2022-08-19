<?php

namespace App\Repository;

use App\Pai;
use App\Filho;
use Illuminate\Support\Facades\DB;

class FamiliaRepository
{
    public static function SaveFamily($data)
    {
        DB::beginTransaction();
        DB::select(DB::raw('SET FOREIGN_KEY_CHECKS = 0;'));
        Filho::query()->truncate();
        Pai::query()->truncate();
        DB::select(DB::raw('SET FOREIGN_KEY_CHECKS = 1;'));
        foreach ($data->pessoas as $pai) {
            $saveDad = Pai::create([
                'nome' => $pai->nome
            ]);

            foreach ($pai->filhos as $filho) {
                Filho::create([
                    'nome' => $filho,
                    'id_pai' => $saveDad->id
                ]);
            }
        }

        DB::commit();
    }

    public static function getFamily()
    {
        $result = [];

        $result = Pai::with('filhos')->get();
        $result = $result->toArray();

        foreach ($result as $index => $valor) {
            $filhos = [];

            foreach ($valor['filhos'] as $filho) {
                //dd($object->filhos);

                $filhos[] = $filho['nome'];
            }
            $result[$index]['filhos'] = $filhos;
        }

        return $result;
    }
}
