<?php
class Todos_model extends CI_Model
{
	/**
	 * Todo list in Array
	 * Substitute for Database
	 */
	private $todos = [
		'Bangun subuh',
		'Berenang di kolam ikan',
		'Sarapan di restauran',
		'Bikin Modul Pelajaran',
        'Istirahat + Ngopi'
	];

    public function __construct()
    {
        // $this->load->database();
    }

	/**
	 * Retrieve all todos || one todo
	 * @param $id todo
	 * @return array
	 */
    public function get_todos($id = NULL)
    {
		if($id != NULL) {
			return $this->todos[$id];
		}

        return $this->todos;
    }

	/**
	 * Save a todo
	 * @param $id todo
	 * @return array
	 */
    public function set_todo()
    {
        $new_todo = $this->input->post('new_todo');

        array_push($this->todos, $new_todo);
        return $this->todos;
    }

	/**
	 * Update a todo
	 * @param $id todo
	 * @return array
	 */
    public function update_todo($id = NULL)
    {
        if($id != NULL) {
            $this->todos[$id] = $this->input->post('new_todo');;
            return $this->todos;
        }
    }

	/**
	 * Delete a todo
	 * @param $id todo
	 * @return array
	 */
    public function delete_todo($id = NULL)
    {
        if($id != NULL) {
            unset($this->todos[$id]);
            return $this->todos;
        }
    }
}
