<?php

use Illuminate\Database\Seeder;
use App\Province;

class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
			[
				'name' 			=> 'Azua',
				'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
			],
			[
				'name' 			=> 'Baoruco',
				'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
			],
			[
				'name' 			=> 'Barahona',
				'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
			],	
			[
				'name' 			=> 'Dajabón',
				'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
			],
			[
				'name' 			=> 'Distrito Nacional',
				'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
			],
			[
				'name' 			=> 'Duarte',
				'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
			],
			[
				'name' 			=> 'El Seibo',
				'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
			],
			[
				'name' 			=> 'Elías Piña',
				'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
			],	
			[
				'name' 			=> 'Espaillat',
				'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
			],
			[
				'name' 			=> 'Hato Mayor',
				'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
			],
			[
				'name' 			=> 'Hermanas Mirabal',
				'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
			],	[
				'name' 			=> 'Independencia',
				'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
			],
			[
				'name' 			=> 'La Altagracia',
				'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
			],
			[
				'name' 			=> 'La Romana',
				'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
			],	[
				'name' 			=> 'La Vega',
				'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
			],
			[
				'name' 			=> 'María Trinidad Sánchez',
				'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
			],
			[
				'name' 			=> 'Monseñor Nouel',
				'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
			],	[
				'name' 			=> 'Monte Cristi',
				'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
			],
			[
				'name' 			=> 'Monte Plata',
				'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
			],
			[
				'name' 			=> 'Pedernales',
				'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
			],	[
				'name' 			=> 'Peravia',
				'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
			],
			[
				'name' 			=> 'Puerto Plata',
				'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
			],
			[
				'name' 			=> 'Samaná',
				'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
			],	[
				'name' 			=> 'San Cristóbal',
				'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
			],
			[
				'name' 			=> 'San José de Ocoa',
				'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
			],
			[
				'name' 			=> 'San Juan',
				'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
			],	[
				'name' 			=> 'San Pedro de Macorís',
				'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
			],
			[
				'name' 			=> 'Sánchez Ramírez',
				'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
			],
			[
				'name' 			=> 'Santiago',
				'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
			],	[
				'name' 			=> 'Santiago Rodríguez',
				'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
			],
			[
				'name' 			=> 'Santo Domingo',
				'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
			],
			[
				'name' 			=> 'Valverde',
				'created_at' 		=> new DateTime,
				'updated_at' 		=> new DateTime
			],		
		);

		Province::insert($data);
    }
}
