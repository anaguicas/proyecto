<?php 

abstract class BaseRepo {

	/**
	 * Modelo del repositorio
	 *
	 * @var Illuminate\Database\Eloquent\Model
	 */
	protected $model;

	/**
	 * Inicialización del modelo
	 */
	function __construct()
	{
		$this->model = $this->getModel();
	}

	/**
	 * Retorna el modelo del repositorio
	 *
	 * @return Illuminate\Database\Eloquent\Model
	 * @abstract
	 */
	abstract public function getModel();

	/**
	 * Crea un nuevo modelo
	 *
	 * @param  array $data Datos
	 * @return Illuminate\Database\Eloquent\Model
	 */
	public function create($data)
	{
		return $this->model->create($data);
	}

	/**
	 * Encuentra un modelo por su ID y opcionalmente precargando una relación del modelo
	 *
	 * @param  int $id
	 * @param  array  $relation(opcional) Relación a precargar
	 * @return \Illuminate\Database\Eloquent\Model
	 */
	public function find($id, $relation = array())
	{
		$query = $this->model->with($relation);
		return $query->find($id);
	}

	/**
	 * Elimina un modelo por su ID
	 *
	 * @param  int $id
	 * @return bool|null
	 */
	public function delete($id)
	{
		return $this->model->find($id)->delete();
	}

	/**
	 * Retorna todos los registros del modelo
	 *
	 * @return Illuminate\Database\Eloquent\Collection
	 */
	public function all()
	{
		return $this->model->all();
	}

	/**
	 * Retorna todos los registros del modelo con una relación precargada
	 *
	 * @param  string $relation
	 * @return Illuminate\Database\Eloquent\Collection
	 */
	public function with($relation)
	{
		return $this->model->with($relation)->get();
	}

	/**
	 * Retorna un arreglo con los valores de una columna dada
	 *
	 * @param  string $column
	 * @param  string $key (opcional)
	 * @return array
	 */
	public function lists($column, $key = null)
	{
		return $this->model->get()->lists($column, $key);
	}

	/**
	 * Retorna un arreglo con los valores de una columna dada y una opción predeterminada
	 *
	 * @param  string $column
	 * @param  string $key (opcional)
	 * @param  string $name   Texto de la opción predeterminada
	 * @param  string $value  Valor de la opción predeterminada
	 * @return array
	 */
	public function listsEmptyOption($column, $key, $name, $value = '')
	{
		return array($value => $name) + $this->lists($column, $key);
	}

	/**
	 * Retorna un modelo por su ID o crea uno nuevo por su nombre
	 *
	 * @param  mixed $input ID o Nombre
	 * @return Illuminate\Database\Eloquent\Model
	 */
	public function findOrCreateByNombre($input)
	{
		$model = $this->model->find($input);
		if(empty($model)) $model = $this->model->create(array('nombre' => $input));
		return $model;
	}
}