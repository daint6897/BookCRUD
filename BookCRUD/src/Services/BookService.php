<?php 
namespace Laraviet\BookCRUD\Services;
use Laraviet\BookCRUD\Services\BookServiceContract;
use Laraviet\BookCRUD\Repositories\BookRepositoryContract;
// class BookService implements BookServiceContract{

class BookService implements BookServiceContract{
	protected $repository;
	public function __construct(BookRepositoryContract $repository){
		$this->repository=$repository;
	}
	public function paginate(){
		return $this->repository->paginate();
	}
	
    public function find($id){
    	return $this->repository->find($id);
    }
    public function store($data){
    	$this->repository->store($data);
    }
    public function update($data,$id){
    	
    	return $this->repository->update($data,$id);
    }
    public function destroy($id){
    	return $this->repository->destroy($id);

    }

}
 ?>
