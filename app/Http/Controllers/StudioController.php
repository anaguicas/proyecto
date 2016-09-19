<?php
namespace App\Http\Controllers;

use Illuminate\Cache\Repository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\StudioRepo;
use App\Repositories\UsersRepo;
use App\Http\Controllers\PerformerController;




class StudioController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showPerformers(){
        $repo = new StudioRepo();
        $consulta = $repo->listPerformers();
        //dump ($consulta); die;
        return view('Studio/listPerformers', ['performers' => $consulta]);
    }

    public function removePerformer($id){
        $repo= new StudioRepo();
        $consulta = $repo->removePerformer($id);
        //dump ($consulta); die;
        return redirect('studio/showPerformers');
    }

    public function addPerformer(){
        $repo= new StudioRepo();
        $consulta = $repo->addPerformer();
    }

    public function performerRegister(){
        $country = $this->Country();
        $bank	 = $this->Bank();
        return view('studio/registroPerformer', ['country' => $country, 'bank' => $bank]);
    }

	public function Bank()
    {

        $bank = array(
            'Davivienda' => 'Davivienda',
            'Bancolombia' => 'Bancolombia',
            'Banco de Bogota' => 'Banco de Bogotá'
        );

        return $bank;

    }


    public function Country(){
        $country = array(
            'Afganistán' => 'Afganistán','Albania' => 'Albania','Alemania' => 'Alemania','Andorra' => 'Andorra','Angola' => 'Angola',
            'Antigua y Barbuda' => 'Antigua y Barbuda','Arabia Saudita' => 'Arabia Saudita',
            'Argelia' => 'Argelia',
            'Argentina' => 'Argentina','Armenia' => 'Armenia','Australia' => 'Australia','Austria' => 'Austria',
            'Azerbaiyán' => 'Azerbaiyán',
            'Bahamas' => 'Bahamas','Bangladés' => 'Bangladés','Barbados' => 'Barbados','Baréin' => 'Baréin','Bélgica' => 'Bélgica','Belice' => 'Belice',
            'Benín' => 'Benín','Bielorrusia' => 'Bielorrusia','Birmania' => 'Birmania','Bolivia' => 'Bolivia','Bosnia y Herzegovina' => 'Bosnia y Herzegovina',
            'Botsuana' => 'Botsuana','Brasil' => 'Brasil','Brunéi' => 'Brunéi','Bulgaria' => 'Bulgaria','Burkina Faso' => 'Burkina Faso',
            'Burundi' => 'Burundi','Bután' => 'Bután','Cabo Verde' => 'Cabo Verde','Camboya' => 'Camboya','Camerún' => 'Camerún',
            'Canadá' => 'Canadá','Catar' => 'Catar','Chad' => 'Chad','Chile' => 'Chile','China' => 'China','Chipre' => 'Chipre',
            'Ciudad del Vaticano' => 'Ciudad del Vaticano','Colombia' => 'Colombia','Comoras' => 'Comoras','Corea del Norte' => 'Corea del Norte',
            'Corea del Sur' => 'Corea del Sur','Costa de Marfil' => 'Costa de Marfil','Costa Rica' => 'Costa Rica','Croacia' => 'Croacia','Cuba' => 'Cuba',
            'Dinamarca' => 'Dinamarca','Dominica' => 'Dominica','Ecuador' => 'Ecuador','Egipto' => 'Egipto','El Salvador' => 'El Salvador',
            'Emiratos Árabes Unido' => 'Emiratos Árabes Unidos','Eritrea' => 'Eritrea',
            'Eslovaquia' => 'Eslovaquia','Eslovenia' => 'Eslovenia','España' => 'España','Estados Unidos' => 'Estados Unidos','Estonia' => 'Estonia',
            'Etiopía' => 'Etiopía','Filipinas' => 'Filipinas','Finlandia' => 'Finlandia','Fiyi' => 'Fiyi','Francia' => 'Francia',
            'Gabón' => 'Gabón','Gambia' => 'Gambia','Georgia' => 'Georgia','Ghana' => 'Ghana','Granada' => 'Granada','Grecia' => 'Grecia',
            'Guatemala' => 'Guatemala','Guyana' => 'Guyana','Guinea' => 'Guinea','Guinea ecuatorial' => 'Guinea ecuatorial',
            'Guinea-Bisáu' => 'Guinea-Bisáu','Haití' => 'Haití','Honduras' => 'Honduras','Hungría' => 'Hungría','India' => 'India',
            'Indonesia' => 'Indonesia','Irak' => 'Irak','Irán' => 'Irán','Irlanda' => 'Irlanda','Islandia' => 'Islandia',
            'Islas Marshall' => 'Islas Marshall','Islas Salomón' => 'Islas Salomón','Israel' => 'Israel','Italia' => 'Italia','Jamaica' => 'Jamaica',
            'Japón' => 'Japón','Jordania' => 'Jordania','Kazajistán' => 'Kazajistán','Kenia' => 'Kenia','Kirguistán' => 'Kirguistán','Kiribati' => 'Kiribati',
            'Kuwait' => 'Kuwait','Laos' => 'Laos','Lesoto' => 'Lesoto','Letonia' => 'Letonia','Líbano' => 'Líbano','Liberia' => 'Liberia',
            'Libia' => 'Libia','Liechtenstein' => 'Liechtenstein','Lituania' => 'Lituania','Luxemburgo' => 'Luxemburgo','Madagascar' => 'Madagascar',
            'Malasia' => 'Malasia','Malaui' => 'Malaui','Maldivas' => 'Maldivas','Malí' => 'Malí','Malta' => 'Malta','Marruecos' => 'Marruecos','Mauricio' => 'Mauricio',
            'Mauritania' => 'Mauritania','México' => 'México','Micronesia' => 'Micronesia','Moldavia' => 'Moldavia','Mónaco' => 'Mónaco','Mongolia' => 'Mongolia',
            'Montenegro' => 'Montenegro','Mozambique' => 'Mozambique','Namibia' => 'Namibia','Nauru' => 'Nauru','Nepal' => 'Nepal','Nicaragua' => 'Nicaragua','Níger' => 'Níger',
            'Nigeria' => 'Nigeria','Noruega' => 'Noruega','Nueva Zelanda' => 'Nueva Zelanda','Omán' => 'Omán','Países Bajos' => 'Países Bajos',
            'Pakistán' => 'Pakistán','Palaos' => 'Palaos','Panamá' => 'Panamá','Papúa Nueva Guinea' => 'Papúa Nueva Guinea','Paraguay' => 'Paraguay','Perú' => 'Perú',
            'Polonia' => 'Polonia', 'Portugal' => 'Portugal','Reino Unido' => 'Reino Unido','República Centroafricana' => 'República Centroafricana',
            'República Checa' => 'República Checa','República de Macedonia' => 'República de Macedonia','República del Congo' => 'República del Congo',
            'República Democrática del Congo' => 'República Democrática del Congo','República Dominicana' => 'República Dominicana',
            'República Sudafricana' => 'República Sudafricana','Ruanda' => 'Ruanda','Rumanía' => 'Rumanía',	'Rusia' => 'Rusia',
            'Samoa' => 'Samoa','San Cristóbal y Nieves' => 'San Cristóbal y Nieves','San Marino' => 'San Marino','San Vicente y las Granadinas' => 'San Vicente y las Granadinas',
            'Santa Lucía' => 'Santa Lucía','Santo Tomé y Príncipe' => 'Santo Tomé y Príncipe','Senegal' => 'Senegal','Serbia' => 'Serbia',
            'Seychelles' => 'Seychelles','Sierra Leona' => 'Sierra Leona','Singapur' => 'Singapur','Siria' => 'Siria',
            'Somalia' => 'Somalia','Sri Lanka' => 'Sri Lanka','Suazilandia' => 'Suazilandia','Sudán' => 'Sudán','Sudán del Sur' => 'Sudán del Sur',
            'Suecia' => 'Suecia','Suiza' => 'Suiza','Surinam' => 'Surinam','Tailandia' => 'Tailandia','Tanzania' => 'Tanzania',
            'Tayikistán' => 'Tayikistán','Timor Oriental' => 'Timor Oriental','Togo' => 'Togo','Tonga' => 'Tonga','Trinidad y Tobago' => 'Trinidad y Tobago',
            'Túnez' => 'Túnez','Turkmenistán' => 'Turkmenistán','Turquía' => 'Turquía','Tuvalu' => 'Tuvalu','Ucrania' => 'Ucrania','Uganda' => 'Uganda',
            'Uruguay' => 'Uruguay','Uzbekistán' => 'Uzbekistán','Vanuatu' => 'Vanuatu','Venezuela' => 'Venezuela','Vietnam' => 'Vietnam',
            'Yemen' => 'Yemen','Yibuti' => 'Yibuti','Zambia' => 'Zambia','Zimbabue' => 'Zimbabue'
        );

        return $country;
    }

    public function __construct(StudioRepo $studio){
		$this->studioRepo = $studio;
	}

	public function Inicio(){
		return view('Studio/inicio');
	}

	public function FormRegister(){
		$bank	 = $this->Bank();
		return view('Studio/registro', ['bank' => $bank]);
		return view('Studio/registro');
	}

	public function Register(Request $request){

		$validation = validator::make($request->all(), [			
			'studio_name'			=> 'required',
			'description'			=> 'required',
			'email' 				=> 'required|email|unique',
			'username'				=> 'required',		
			'email' 				=> 'required|email|unique',
			'password' 				=> 'required|alphanum|min:5',
			'studio_owner'			=> 'required',
			'number' 				=> 'required',
			'bank'					=> 'required'	
			]);

		/*$errors = array(			
			'required'  => 'El campo :attribute es obligatorio',
			'min' 		=> 'El campo :attribute no puede tener menos de :min carácteres',
			'email' 	=> 'El campo :attribute debe ser un email válido',
			'unique' 	=> 'El email ingresado ya existe en la base de datos'
			);*/

		if($validation->fails()){			
			return redirect()->back()->withInput()->withErrors($validation->errors());			
		}else{

			$datos_user = array(
				'username' 	=> $request->input('username'),
				'email'		=> $request->input('email'),
				'user_type'	=> 3,
				'password'	=> $request->input('password')
				);

			$this->UsersRepo->addUser($datos_user);

			$user = $datos_user['email'];

			$studio_user = $this->UsersRepo->findUser($user)->first()->id;	

			//$datos_studio = array(
			$datos = array(
				'studio_name'			=> $request->input('studio_name'),
				'description'			=> $request->input('description'),
				'studio_owner'			=> $request->input('studio_owner'),
				'number'				=> $request->input('number'),
				'bank'					=> $request->input('bank'),
				'id_user'				=> $studio_user,
				'bank'					=> $request->input('bank')
				);

			if($this->studioRepo->AddStudio($datos)){
				return redirect()->back()->with('message','Successful.');
			}else{
				return redirect()->back()->with('error','An error has ocurred.');
			}
		}
	}

	public function FormProfile(){
		return view('Studio/editarPerfil');
	}

	public function editProfile(){
		$validation = validator::make($request->all(), [			
			'studio_name'			=> 'required',
			'description'			=> 'required',
			'email' 				=> 'required|email|unique',
			'username'				=> 'required',		
			'password' 				=> 'required|alphanum|min:5',				
			'studio_owner'			=> 'required',
			'number' 				=> 'required',
			'bank'					=> 'required'	
			]);

		if($validation->fails()){			
			return redirect()->back()->withInput()->withErrors($validation->errors());			
		}else{

			$datos_user = array(
				'username' 	=> $request->input('username'),
				'email'		=> $request->input('email'),
				'password'	=> $request->input('password')
				);

			$this->UsersRepo->addUser($datos_user);

			$user = $datos_user['email'];

			$studio_user = $this->UsersRepo->findUser($user)->first()->id;	

			$datos_studio = array(
				'studio_name'			=> $request->input('studio_name'),
				'description'			=> $request->input('description'),
				'studio_owner'			=> $request->input('studio_owner'),
				'number'				=> $request->input('number'),
				'bank'					=> $request->input('bank'),
				'id_user'				=> $studio_user
				);

			if($this->studioRepo->AddStudio($datos)){
				return redirect()->back()->with('message','Successful.');
			}else{
				return redirect()->back()->with('error','An error has ocurred.');
			}
		}
	}



}
