<?php

use Illuminate\Database\Seeder;

class ConsultationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('consultations')->insert([
            'id_consultation' => 1,
            'id_user' => 4,
            'id_history' => 1,
            'id_vaccine' =>1,
            'comments' => 'Se acerca a la consulta ya que no come hace dos días. No presenta signos de malestar estomacal o intestinal.',
            'afflictions_procedures' => 'Se le indica cambio de alimento balanceado.',
            'created_at' => date('2020-01-02 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 2,
            'id_user' => 4,
            'id_history' => 2,
            'comments' => 'Se acerca a la consulta porque tiene diarrea.',
            'afflictions_procedures' => 'Se le indica dieta de arroz blaco y pollo a la plancha por tres días.',
            'created_at' => date('2020-01-02 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 3,
            'id_user' => 8,
            'id_history' => 2,
            'comments' => 'Consulta por castración.',
            'afflictions_procedures' => 'Se castró al perro.',
            'created_at' => date('2020-02-02 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 4,
            'id_user' => 4,
            'id_history' => 3,
            'comments' => 'Consulta por vacunación y desparasitación.',
            'afflictions_procedures' => 'Se vacunó y desparasitó al gato.',
            'created_at' => date('2020-01-02 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 5,
            'id_user' => 4,
            'id_history' => 3,
            'comments' => 'El paciente presentaba irritación en la piel de las orejas.',
            'afflictions_procedures' => 'Se le recetó ALOE VET gel cicatrizante 50ml 2 veces al día.',
            'created_at' => date('2020-02-02 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 6,
            'id_user' => 9,
            'id_history' => 4,
            'comments' => 'Urgencia por vómitos, presentaba sintomas de GDV.',
            'afflictions_procedures' => 'Presentaba el estómago distendido con  aire y girado sobre sí mismo. Se lo estabilizó y realizó cirugía.',
            'created_at' => date('2020-01-02 01:01:02'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 7,
            'id_user' => 9,
            'id_history' => 5,
            'comments' => 'Consulta por perro rescatado, lastimado y con parásitos.',
            'afflictions_procedures' => 'Se le curó herida en el rabo, perdió parte de la cola. Se desparasitó y vacuno',
            'created_at' => date('2020-01-01 01:01:02'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 8,
            'id_user' => 9,
            'id_history' => 5,
            'comments' => 'Consulta por problemas de cintura.',
            'afflictions_procedures' => 'Se realizaron radiografías para monitorear hernia de disco en la región lumbar.',
            'created_at' => date('2020-02-02 01:02:02'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 9,
            'id_user' => 8,
            'id_history' => 6,
            'comments' => 'Consulta por vacunación.',
            'afflictions_procedures' => 'Se aplicaron vacunas.',
            'created_at' => date('2020-01-02 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 10,
            'id_user' => 8,
            'id_history' => 6,
            'comments' => 'Consulta por castración.',
            'afflictions_procedures' => 'Se realizó castración.',
            'created_at' => date('2020-02-02 01:02:02'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 11,
            'id_user' => 8,
            'id_history' => 7,
            'comments' => 'Consulta anual.',
            'afflictions_procedures' => 'Se realizaron radiografías por dolor en zona abdominal. Se encontraron masas anormales.',
            'created_at' => date('2020-01-02 01:01:02'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 12,
            'id_user' => 8,
            'id_history' => 7,
            'comments' => 'Operación por de bazo.',
            'afflictions_procedures' => 'Se realizó cirugía para remover masas anormales del bazo.',
            'created_at' => date('2020-02-02 01:02:02'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 13,
            'id_user' => 4,
            'id_history' => 7,
            'comments' => 'Operaciónpor de bazo.',
            'afflictions_procedures' => 'Se realizó cirugía para remover masas anormales del bazo.',
            'created_at' => date('2020-03-03 01:03:03'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 14,
            'id_user' => 4,
            'id_history' => 8,
            'comments' => 'Consulta por castración.',
            'afflictions_procedures' => 'Se realizó cirugía de castración.',
            'created_at' => date('2020-01-02 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 15,
            'id_user' => 4,
            'id_history' => 8,
            'comments' => 'Consulta por alergia.',
            'afflictions_procedures' => 'Se recetó aplicar pervinox para curar la piel irritada y se aplicó pipeta.',
            'created_at' => date('2020-02-02 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 16,
            'id_user' => 4,
            'id_history' => 9,
            'comments' => 'Consulta urgente por herida.',
            'afflictions_procedures' => 'Se aplicó vacuna antirabica, se desinfectó y se vendaron las heridas presentes en la pata posterior derecha. Se recetó cambiar las vendas y limpiar la herida con pervinox.',
            'created_at' => date('2020-01-02 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 17,
            'id_user' => 4,
            'id_history' => 10,
            'comments' => 'Consulta por pulgas.',
            'afflictions_procedures' => 'Se aplica pipeta antipulgas.',
            'created_at' => date('2020-01-02 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 18,
            'id_user' => 8,
            'id_history' => 6,
            'comments' => 'Consulta por vómitos.',
            'afflictions_procedures' => 'Se receta cambio de dieta.',
            'created_at' => date('2020-03-03 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 19,
            'id_user' => 8,
            'id_history' => 7,
            'comments' => 'Consulta por vómitos.',
            'afflictions_procedures' => 'Se receta Metronidazol 2,5 mm dos veces al día.',
            'created_at' => date('2020-04-04 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 20,
            'id_user' => 4,
            'id_history' => 7,
            'comments' => 'Consulta por vómitos.',
            'afflictions_procedures' => 'Se receta Metronidazol 2,5 mm dos veces al día.',
            'created_at' => date('2020-05-05 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 21,
            'id_user' => 4,
            'id_history' => 11,
            'comments' => 'Consulta por alimentación.',
            'afflictions_procedures' => 'Se le recetó una comida para gatos mayores, la que consumía era para gatos jóvenes.',
            'created_at' => date('2020-01-02 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 22,
            'id_user' => 4,
            'id_history' => 8,
            'comments' => 'Consulta por alergia.',
            'afflictions_procedures' => 'Se recetó aplicar pervinox para curar la piel irritada.',
            'created_at' => date('2020-03-02 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 23,
            'id_user' => 4,
            'id_history' => 8,
            'comments' => 'Consulta por diarrea.',
            'afflictions_procedures' => 'Se recetó receta a base de arroz y pollo hervido.',
            'created_at' => date('2020-04-02 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 24,
            'id_user' => 4,
            'id_history' => 8,
            'comments' => 'Consulta por sarro dental.',
            'afflictions_procedures' => 'Se realiza limpieza de dentadura.',
            'created_at' => date('2020-05-02 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 25,
            'id_user' => 4,
            'id_history' => 8,
            'comments' => 'Consulta por uña encarnada.',
            'afflictions_procedures' => 'Se realiza pequeña cirugía para quitar la uña.',
            'created_at' => date('2020-06-02 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 26,
            'id_user' => 4,
            'id_history' => 8,
            'comments' => 'Consulta por uña diarrea.',
            'afflictions_procedures' => 'Se indica dieta.',
            'created_at' => date('2020-06-02 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 27,
            'id_user' => 4,
            'id_history' => 9,
            'comments' => 'Consulta por mal aliento.',
            'afflictions_procedures' => 'Se indica enjuage bucal.',
            'created_at' => date('2020-02-02 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 28,
            'id_user' => 4,
            'id_history' => 9,
            'comments' => 'Consulta por mal aliento.',
            'afflictions_procedures' => 'Se indica otro enjuage bucal.',
            'created_at' => date('2020-02-15 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 29,
            'id_user' => 4,
            'id_history' => 9,
            'comments' => 'Consulta por diarrea.',
            'afflictions_procedures' => 'Se indica dieta.',
            'created_at' => date('2020-04-15 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 30,
            'id_user' => 4,
            'id_history' => 11,
            'comments' => 'Consulta por diarrea.',
            'afflictions_procedures' => 'Se indica dieta.',
            'created_at' => date('2020-04-02 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 31,
            'id_user' => 4,
            'id_history' => 11,
            'comments' => 'Consulta por diarrea.',
            'afflictions_procedures' => 'Se cambia dieta.',
            'created_at' => date('2020-04-15 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 32,
            'id_user' => 4,
            'id_history' => 11,
            'comments' => 'Consulta por alergía.',
            'afflictions_procedures' => 'Se indica antialérgico.',
            'created_at' => date('2020-04-30 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 33,
            'id_user' => 8,
            'id_history' => 12,
            'comments' => 'Consulta por alergía.',
            'afflictions_procedures' => 'Se indica antialérgico.',
            'created_at' => date('2020-01-01 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 34,
            'id_user' => 8,
            'id_history' => 12,
            'comments' => 'Consulta por diarrea.',
            'afflictions_procedures' => 'Se indica dieta.',
            'created_at' => date('2020-01-15 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 35,
            'id_user' => 8,
            'id_history' => 12,
            'comments' => 'Consulta por diarrea.',
            'afflictions_procedures' => 'Se indica dieta.',
            'created_at' => date('2020-01-30 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 36,
            'id_user' => 8,
            'id_history' => 12,
            'comments' => 'Consulta por uña encarnada.',
            'afflictions_procedures' => 'Se realiza extracción de la uña.',
            'created_at' => date('2020-02-15 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 37,
            'id_user' => 8,
            'id_history' => 12,
            'comments' => 'Consulta por herida.',
            'afflictions_procedures' => 'La herida de la uña no cocatriza, se aplica cicatrizante.',
            'created_at' => date('2020-02-20 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 38,
            'id_user' => 8,
            'id_history' => 12,
            'comments' => 'Consulta por herida.',
            'afflictions_procedures' => 'Se quitan los puntos.',
            'created_at' => date('2020-02-28 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 39,
            'id_user' => 8,
            'id_history' => 12,
            'comments' => 'Consulta por alergia.',
            'afflictions_procedures' => 'Se aplica antialérgico.',
            'created_at' => date('2020-03-01 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 40,
            'id_user' => 8,
            'id_history' => 12,
            'comments' => 'Consulta por diarrea.',
            'afflictions_procedures' => 'Se indica dieta.',
            'created_at' => date('2020-04-01 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 41,
            'id_user' => 8,
            'id_history' => 12,
            'comments' => 'Consulta por diarrea.',
            'afflictions_procedures' => 'Se indica nueva dieta.',
            'created_at' => date('2020-04-15 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 42,
            'id_user' => 8,
            'id_history' => 12,
            'comments' => 'Consulta por mal aliento.',
            'afflictions_procedures' => 'Se indica enjuage bucal.',
            'created_at' => date('2020-05-01 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 43,
            'id_user' => 8,
            'id_history' => 12,
            'comments' => 'Consulta por sarro.',
            'afflictions_procedures' => 'Se realiza limpieza dental.',
            'created_at' => date('2020-06-01 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 44,
            'id_user' => 8,
            'id_history' => 12,
            'comments' => 'Consulta por vómitos.',
            'afflictions_procedures' => 'Se indica que es normal ya que comió pasto.',
            'created_at' => date('2020-07-01 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 45,
            'id_user' => 8,
            'id_history' => 13,
            'comments' => 'Consulta de rutina.',
            'afflictions_procedures' => 'Se observa todo normal.',
            'created_at' => date('2020-01-01 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 46,
            'id_user' => 8,
            'id_history' => 13,
            'comments' => 'Consulta por alergia.',
            'afflictions_procedures' => 'Se indica antialérgico.',
            'created_at' => date('2020-02-01 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 47,
            'id_user' => 8,
            'id_history' => 13,
            'comments' => 'Consulta por largo de uñas.',
            'afflictions_procedures' => 'Se cortan las uñas.',
            'created_at' => date('2020-03-01 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 48,
            'id_user' => 8,
            'id_history' => 13,
            'comments' => 'Consulta por mal aliento.',
            'afflictions_procedures' => 'Se indica enjuage bucal.',
            'created_at' => date('2020-04-01 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 49,
            'id_user' => 8,
            'id_history' => 13,
            'comments' => 'Consulta por sarro.',
            'afflictions_procedures' => 'Se realiza limpieza dental.',
            'created_at' => date('2020-05-01 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 50,
            'id_user' => 8,
            'id_history' => 13,
            'comments' => 'Consulta por diarrea.',
            'afflictions_procedures' => 'Se indica dieta.',
            'created_at' => date('2020-05-15 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 51,
            'id_user' => 8,
            'id_history' => 13,
            'comments' => 'Consulta por diarrea.',
            'afflictions_procedures' => 'Se indica cambia dieta.',
            'created_at' => date('2020-05-20 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 52,
            'id_user' => 8,
            'id_history' => 13,
            'comments' => 'Consulta por diarrea.',
            'afflictions_procedures' => 'Se indica suero.',
            'created_at' => date('2020-05-28 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 53,
            'id_user' => 8,
            'id_history' => 13,
            'comments' => 'Consulta por diarrea.',
            'afflictions_procedures' => 'Se observa todo normal.',
            'created_at' => date('2020-05-30 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 54,
            'id_user' => 8,
            'id_history' => 13,
            'comments' => 'Consulta por alimento.',
            'afflictions_procedures' => 'Se indica alimento de raza.',
            'created_at' => date('2020-06-15 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 55,
            'id_user' => 8,
            'id_history' => 13,
            'comments' => 'Consulta por alimento.',
            'afflictions_procedures' => 'Se indica cambia alimento.',
            'created_at' => date('2020-07-01 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 56,
            'id_user' => 8,
            'id_history' => 13,
            'comments' => 'Consulta por alimento.',
            'afflictions_procedures' => 'Se indica nuevo cambio de alimento.',
            'created_at' => date('2020-07-10 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('consultations')->insert([
            'id_consultation' => 57,
            'id_user' => 8,
            'id_history' => 13,
            'comments' => 'Consulta por herida.',
            'afflictions_procedures' => 'Se aplica cicatrizante.',
            'created_at' => date('2020-07-14 01:01:01'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
