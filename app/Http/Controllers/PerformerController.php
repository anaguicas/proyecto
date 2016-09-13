<?php
namespace App\Http\Controllers;

use App\Http\Request\RegistroFormRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\PerformerRepo;
use Validator;


class PerformerController extends Controller{

	public function _construct(){
		$this->PerformerRepo = New PerformerRepo();
	}

	public function Inicio(){
		return view('performers/inicio');
	}

	public function FormRegister(){		

		$country = array(
			'Afganistán','Albania','Alemania','Andorra','Angola','Antigua y Barbuda',
			'Arabia Saudita','Argelia','Argentina','Armenia','Australia','Austria',
			'Azerbaiyán','Bahamas','Bangladés','Barbados','Baréin','Bélgica','Belice',
			'Benín','Bielorrusia','Birmania','Bolivia','Bosnia y Herzegovina','Botsuana',
			'Brasil','Brunéi','Bulgaria','Burkina Faso','Burundi','Bután','Cabo Verde','Camboya','Camerún',
			'Canadá','Catar','Chad','Chile','China','Chipre',
			'Ciudad del Vaticano','Colombia','Comoras','Corea del Norte','Corea del Sur',
			'Costa de Marfil','Costa Rica','Croacia','Cuba','Dinamarca','Dominica','Ecuador',
			'Egipto','El Salvador','Emiratos Árabes Unidos','Eritrea','Eslovaquia','Eslovenia',
			'España','Estados Unidos','Estonia','Etiopía','Filipinas','Finlandia','Fiyi',
			'Francia','Gabón','Gambia','Georgia','Ghana','Granada','Grecia','Guatemala','Guyana',
			'Guinea','Guinea ecuatorial','Guinea-Bisáu','Haití','Honduras','Hungría',
			'India','Indonesia','Irak','Irán',
			'Irlanda','Islandia','Islas Marshall','Islas Salomón','Israel','Italia',
			'Jamaica','Japón','Jordania','Kazajistán','Kenia','Kirguistán','Kiribati',
			'Kuwait','Laos','Lesoto','Letonia','Líbano','Liberia','Libia','Liechtenstein',
			'Lituania','Luxemburgo','Madagascar','Malasia','Malaui','Maldivas','Malí',
			'Malta','Marruecos','Mauricio','Mauritania','México','Micronesia','Moldavia',
			'Mónaco','Mongolia','Montenegro','Mozambique','Namibia','Nauru','Nepal',
			'Nicaragua','Níger','Nigeria','Noruega','Nueva Zelanda','Omán','Países Bajos',
			'Pakistán','Palaos','Panamá','Papúa Nueva Guinea','Paraguay','Perú','Polonia',
			'Portugal','Reino Unido','República Centroafricana','República Checa',
			'República de Macedonia','República del Congo','República Democrática del Congo',
			'República Dominicana','República Sudafricana','Ruanda','Rumanía','Rusia','Samoa',
			'San Cristóbal y Nieves','San Marino','San Vicente y las Granadinas','Santa Lucía',
			'Santo Tomé y Príncipe','Senegal','Serbia','Seychelles','Sierra Leona','Singapur',
			'Siria','Somalia','Sri Lanka','Suazilandia','Sudán','Sudán del Sur','Suecia','Suiza','Surinam','Tailandia','Tanzania','Tayikistán','Timor Oriental',
			'Togo','Tonga','Trinidad y Tobago','Túnez','Turkmenistán','Turquía','Tuvalu','Ucrania',
			'Uganda','Uruguay','Uzbekistán','Vanuatu','Venezuela','Vietnam','Yemen','Yibuti','Zambia','Zimbabue'
			);

return view('performers/registro', ['country' => $country]);
}

public function Register(Request $request){

	$validation = validator::make($request->all(), [			
		'name' => 'required',
		'last_name' => 'required',
		'identification' => 'required|num',
		'photo_identification' => 'required|image',
		'city' => 'required',
		'country' => 'required',
		'username' => 'required',	
		'email' => 'required|email|unique',		
		'password' => 'required|alphanum|min:3'	
		]);

	$errors = array(			
		'required' => 'El campo :attribute es obligatorio',
		'min' => 'El campo :attribute no puede tener menos de :min carácteres',
		'email' => 'El campo :attribute debe ser un email válido',
		'unique' => 'El email ingresado ya existe en la base de datos'
		);

	if($validation->fails()){
		return redirect()->back()->withInput()->withErrors($validation->errors());			
	}else{

		$imagen = $request->file('photo_identification');

		$new_name = time().$imagen->getClientOriginalName();
		$img_dir = env('IMG_UPLOAD');
		$img_url = env('MEDIA_URL')."/img/uploads/".$new_name;
		$imagen->move($img_dir,$new_name);

		$datos = array(
			'name'					=> $request->input('name'),
			'last_name'				=> $request->input('last_name'),
			'identification'		=> $request->input('identification'),
			'photo_identification'	=> $img_url,
			'city'					=> $request->input('city'),
			'country'				=> $request->input('country'),
			'username' 	=> $request->input('username'),
			'email'		=> $request->input('email'),
			'password'	=> $request->input('password')					
			);


	}
}
}