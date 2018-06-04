<?php 
namespace App\Repositories;
use Laraviet\BookCRUD\Models\Book;
use Laraviet\BookCRUD\Repositories\BookRepositoryContract;
class BookRepository implements BookRepositoryContract{
	protected $model;
	public function __construct(Book $model){
		$this->model=$model;
	}
	public function paginate(){
		return $this->model->paginate(10);
	}
    public function find($id){
    	return $this->model->findOrFail($id);
    }
    public function store($data){
    	$this->model->create($data);
    }
    public function update($data,$id){
    	$model = $this->model->find($id);
    	return $model->update($data);
    }
    public function destroy($id){
    	$model = $this->find($id);
    	return $model->destroy($id);
    }
}
 ?>
