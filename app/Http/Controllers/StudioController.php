<?php
namespace App\Http\Controllers;
use App\Http\Request\RegistroFormRequest;
use Illuminate\Cache\Repository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\StudioRepo;
use App\Repositories\UsersRepo;
use App\Http\Controllers\PerformerController;
use App\Repositories\CreditCardRepo;
use App\Repositories\PerformerRepo;
use Illuminate\Support\Facades\Redirect;
use Session;


class StudioController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __construct(){
		$this->studioRepo 	= New StudioRepo;
		$this->usersRepo 	= New UsersRepo;
        $this->performerRepo = New PerformerRepo;
		$this->creditRepo	= New CreditCardRepo;
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

	public function getInicio(){
		
		//validacion de inicio de sesion
		if(Auth::check()){
            $studio_id =  Auth::user()->id;
			//return Redirect::route('studio.inicio',array('id' => $studio_id));
            return view('Studio/inicio', ['id' => $studio_id]);
		}else{
			return Redirect::to('/');
		}
	}

	public function getRegister(){
		$bank	 = $this->Bank();
		return view('Studio/registro', ['bank' => $bank]);
	}

	public function postRegister(Request $request){

		$validation = validator::make($request->all(), [			
			'studio_name'			=> 'required',
			'description'			=> 'required',
			'email'					=> 'required|email|max:255|unique:users',
			'password' 				=> 'required|alpha_num|min:6|confirmed',
			'password_confirmation'	=> 'required|alpha_num|min:6',
			'username'				=> 'required',
			'studio_owner'			=> 'required',
			'number' 				=> 'required',
			'bank'					=> 'required'	
			]);

		if($validation->fails()){			
			return redirect()->back()->withInput()->withErrors($validation->errors());			
		}else{

			$datos_user = array(
				'username' 	=> $request->input('name'),
				'email'		=> $request->input('email'),
				'user_type'	=> 3,
				'password'	=> $request->input('password')
				);

			$this->usersRepo->addUser($datos_user);
			$user = $datos_user['email'];
			$studio_user = $this->usersRepo->findUser($user)->first()->id;
			$datos_studio = array(
				'studio_name'			=> $request->input('studio_name'),
				'description'			=> $request->input('description'),
				'studio_owner'			=> $request->input('studio_owner'),				
				'id_user'				=> $studio_user
				);

            $datos_card = array(
                'bank'					=> $request->input('bank'),
                'number'				=> $request->input('number'),
                'id_user'				=> $studio_user,
                'bank'					=> $request->input('bank')
            );
			$credit_card = $this->creditRepo->addCreditCard($datos_card);

			if($this->studioRepo->AddStudio($datos_studio)){
				return redirect()->back()->with('message','Successful.');
			}else{
				return redirect()->back()->with('error','There was a problem. Pleas try again');
			}
		}
	}

    public function getEditar($id){
		$bank	 = $this->Bank();

		$user = Auth::user()->name;
		$studios = $this->studioRepo->editProfile($id);		
        $studio_id =  Auth::user()->id;
		/*var_dump($studio);
		die();*/
		$studio =  array(
            'name'              => $studios[0]->name,
            'description'       => $studios[0]->description,
            'studio_name'       => $studios[0]->studio_name,
            'responsible'       => $studios[0]->responsible,
            'email'             => $studios[0]->email,
            'bank'              => $studios[0]->bank,
            'number'            => $studios[0]->number,
            'password'          => $studios[0]->password
            );
		
		return view('Studio/editarPerfil', compact('studio','id','bank'));
		//return \Redirect::route('studio.editprofile', ['studio' => $studio]);
	}

	public function putEditar(){

		$validation = validator::make(\Input::all(), [
            'studio_name'			=> 'required',
            'description'			=> 'required',
            'email'					=> 'required|email|max:255',
            //'password' 				=> 'required|min:6',
            'name'  				=> 'required',
            'responsible'			=> 'required',
            'number' 				=> 'required',
            'bank'					=> 'required'
			]);
        
        if($validation->passes()){

            $datos_user = array(
                'username'  => \Input::get('name'),
                'email'     => \Input::get('email')
                );
            
            $id = Auth::user()->id;

            //$studio_user = $this->UsersRepo->findUser($user)->first()->id;

            $datos_studio = array(
                'studio_name'           => \Input::get('studio_name'),
                'description'           => \Input::get('description'),
                'responsible'           => \Input::get('responsible')
                );

            $datos_card = array(
                'bank'                  => \Input::get('bank'),
                'number'                => \Input::get('number')
            );                

            if($this->studioRepo->update($id,$datos_studio) && $this->creditRepo->update($id, $datos_card) && $this->usersRepo->update($id,$datos_user)){
                return redirect()->back()->with('message','User update successful.');
            }else{
                return redirect()->back()->with('error','There was a problem updating user information. Please try again');
            }

        }else{
            /*var_dump($validation->errors());
            die(); */
            return redirect()->back()->withInput()->withErrors($validation->errors());
        }
	}

    public function getPerformers(){
        $repo = new StudioRepo();
        $consulta = $repo->listPerformers();
        //dump ($consulta); die;
        return view('Studio/listPerformers', ['performers' => $consulta]);
    }

    public function deletePerformer($id){
        $repo= new StudioRepo();
        $consulta = $repo->removePerformer($id);
        //dump ($consulta); die;
        return redirect('studio/showPerformers');
    }

    public function AddPerformer(){
        $repo= new StudioRepo();
        $consulta = $repo->addPerformer();
    }

    public function getPerformerRegister(){
        $country = $this->Country();
        $bank    = $this->Bank();
        return view('studio/registroPerformer', ['country' => $country, 'bank' => $bank]);
    }

    public function postSavePerformer(Request $request){

        $validation = validator::make($request->all(), [
            'perfor_name'           => 'required',
            'last_name'             => 'required',
            'identification'        => 'required|numeric',
            'photo_identification'  => 'required|mimes:jpeg,jpg,png|max:10240',
            //'photo_identification'    => 'required',
            'city'                  => 'required',
            'country'               => 'required',
            'name'                  => 'required|unique:users',
            'email'                 => 'required|email|max:255|unique:users',
            'password'              => 'required|alpha_num|min:6|confirmed',
            'password_confirmation' => 'required|alpha_num|min:6',
            'birthdate'             => 'required|date|before:18 years old',
            'bank'                  => 'required'
        ]);

        if($validation->fails()){
            return redirect()->back()->withInput()->withErrors($validation->errors());
        }else{
            $performer_studio = Auth::user()->name;
            //dump($performer_studio); die;
            $imagen = $request->file('photo_identification');

            $new_name = time().$imagen->getClientOriginalName();
            $img_dir = env('IMG_UPLOAD');
            $img_url = env('MEDIA_URL')."/img/uploads/".$new_name;
            $imagen->move($img_dir,$new_name);
            $datos_user = array(
                'username'  => $request->input('name'),
                'email'     => $request->input('email'),
                'user_type' => 1,
                'password'  => $request->input('password')
            );
            $user = $datos_user['email'];

            $this->usersRepo->addUser($datos_user);

            $performer_user = $this->usersRepo->findUser($user)->first()->id;

            $datos_performer = array(
                'name'                  => $request->input('perfor_name'),
                'last_name'             => $request->input('last_name'),
                'identification'        => $request->input('identification'),
                'photo_identification'  => $img_url,
                'city'                  => $request->input('city'),
                'country'               => $request->input('country'),
                'username'              => $request->input('name'),
                'birthdate'             => $request->input('birthdate'),
                'id_user'               => $performer_user
            );

            $datos_card = array(
                'bank'                  => $request->input('bank'),
                'number'                => $request->input('number'),
                'id_user'               => $performer_user,
                'bank'                  => $request->input('bank')
            );

            $credit_card = $this->creditRepo->addCreditCard($datos_card);

            if($this->performerRepo->addPerformer($datos_performer)){
                return redirect()->back()->with('message','Successfull');
            }else{
                return redirect()->back()->with('error','There was a problem. Please try again.');
            }
        }

        /*public function getEditarPerformer($id){

        }*/
    }
}
