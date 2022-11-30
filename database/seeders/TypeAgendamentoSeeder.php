<?php

namespace Database\Seeders;

use App\Models\TypeAgendamento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeAgendamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typeAgendamento = new TypeAgendamento();
        $typeAgendamento->id = TypeAgendamento::CARGA;
        $typeAgendamento->name = 'Carga';
        $typeAgendamento->save();

        $typeAgendamento = new TypeAgendamento();
        $typeAgendamento->id = TypeAgendamento::DESCARGA;
        $typeAgendamento->name = 'Descarga';
        $typeAgendamento->save();
    }
}
