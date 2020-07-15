<?php


use App\Product;
use App\Subcategory;
use Illuminate\Database\Seeder;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		factory(Subcategory::class, 10)->create();
		$this->addProductSubcategory();
	 }
	 
	 public function addProductSubcategory()
    {
			$products = Product::with('category.subCategories')->get();
			foreach($products as $product){
				$category = $product->category;
				$sub_categories_ids = $category->subCategories->pluck('id');
				$product->subcategory_id = $sub_categories_ids->random();
				$product->save();
			}
		
    }
}
