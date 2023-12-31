<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AC>
 */
class AcFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $user_id = [1,2,3];
        $status = ['Normal', 'Rusak'];
        $merk = ['Daikin','General','Panasonic','LG','Sharp','Mitshubisi'];
        $lantai = ['Lt1','Lt2','Lt3'];
        $wing = ['WA','WB','WC','WD'];
        $assets = ['Telkom','GSD','TA','GA','Marketing','Finance'];
        $type = ['Cassete','Wall Mounted','Standing floor','Central'];
        $jenis = ['Inverter','Non-Inverter'];
        $kapasitas = ['1/2pk','3/4pk','1pk','1,5pk','2pk','2,5pk','2,5pk','3pk','5pk','8pk','10pk'];
        $ruangan = ['Staff Marketing','Staff GSD','OSM BPP','GM GSD','Staff TA','OSM TA'];
        $btu = ['20.000','9.000','18.000','5.000'];
        $product = ['Thailand','Vietnam','China'];
        $current = ['10 A','1.2 A','16.6 A'];
        $petugasMaint = ['Rinto Harahap', 'Rahmat Abdullah', 'Alim Darmawan', 'Rahmat Hidayatullah', 'Rahmat Haryadi', 'Andriadi Hamid', 'Arif Nur', 'Arif Dg Awing', 'Syahril Dahlan', 'Hasrul'];
        $refri = ['R32','R410','R22'];
        $volt = ['220Volt','380Volt'];
        $pipa = ['1/4 + 3/8','1/4 + 1/2','1/4 + 5/8','3/8 + 5/8','3/8 + 3/4','1/2 + 3/4', '1/2 + 7/8', '1/2 + 1 1/2'];
        $tgl_maint = ['2023-03-21 19:00', '2022-12-15 19:00', '2023-04-08 19:00', '2023-05-19 19:00'];

        $randomString = strtoupper(Str::random(10) . Str::random(5));

        return [
            'user_id' => $this->faker->randomElement($user_id),
            'label' => random_int(100, 999),
            'assets' => $this->faker->randomElement($assets),
            'wing' => $this->faker->randomElement($wing),
            'lantai' => $this->faker->randomElement($lantai),
            'ruangan' => $this->faker->randomElement($ruangan),
            'merk' => $this->faker->randomElement($merk),
            'type' => $this->faker->randomElement($type),
            'jenis' => $this->faker->randomElement($jenis),
            'kapasitas' => $this->faker->randomElement($kapasitas),
            'refrigerant' => $this->faker->randomElement($refri),
            'product' => $this->faker->randomElement($product),
            'current' => $this->faker->randomElement($current),
            'voltage' => $this->faker->randomElement($volt),
            'btu' => $this->faker->randomElement($btu),
            'pipa' => $this->faker->randomElement($pipa),
            'status' => $this->faker->randomElement($status),
            'catatan' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa numquam cumque eum dolores perferendis odio dignissimos non sed labore iste.",
            'keterangan' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa numquam cumque eum dolores perferendis odio dignissimos non sed labore iste.",
            'tgl_pemasangan' => $this->faker->dateTimeBetween('2022-01-01', '2022-12-31')->format('Y-m-d'),
            'petugas_pemasangan' => $this->faker->name(),
            'tgl_maintenance' => $this->faker->randomElement($tgl_maint),
            'petugas_maint' => $this->faker->randomElement($petugasMaint),
            'seri_indoor' =>  $randomString,
            'seri_outdoor' =>  $randomString
        ];
    }
}
