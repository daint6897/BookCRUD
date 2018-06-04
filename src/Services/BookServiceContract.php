<?php 
namespace Laraviet\BookCRUD\Services;
interface BookServiceContract{
	public function paginate();
    public function find($id);
    public function store($data);
    public function update($data,$id);
    public function destroy($id);
}
 ?>
