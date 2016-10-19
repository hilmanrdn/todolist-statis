<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Todos extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('todos_model');
		$this->load->helper('url');
    }

	/**
	 * Show all todos
	 * @return View
	 */
	public function index()
	{
		$data['todos'] = $this->todos_model->get_todos();
		$this->load->view('todos/index', $data);
	}

	/**
	 * Save new todo
	 * @return View
	 */
	public function create()
	{
		$data['todos'] = $this->todos_model->set_todo();
        $this->load->view('todos/index', $data);
	}

	/**
	 * Delete one todo
	 * @param $id todo
	 * @return View
	 */
	public function delete($id = null)
	{
		if ($id != null) {
			$data['todos'] = $this->todos_model->delete_todo($id);
	        $this->load->view('todos/index', $data);
		}
	}

	/**
	 * Show edit page
	 * @param $id todo
	 * @return View
	 */
	public function edit($id = null)
	{
		$data['id']	   = $id;
		$data['todo']  = $this->todos_model->get_todos($id);
		$this->load->view('todos/edit', $data);
	}

	/**
	 * Update one todo
	 * @param $id todo
	 * @return View
	 */
	public function update($id = null)
	{
		$data['todos']  = $this->todos_model->update_todo($id);
		$this->load->view('todos/index', $data);
	}

}
