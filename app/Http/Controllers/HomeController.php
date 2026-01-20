<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Http;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Collection;

use Illuminate\Http\Request; 

use App\Models\Post;

use App\Models\Category;

use App\Models\Tag;

class HomeController extends Controller
{
	
	
	public function index(){
		
		
		
		return view('home.index');
		
		//Many To Many
		/*$post = Post::query()->find(1);
		
		$tags = $post->tags;
		
		dump($tags);
		
		foreach ($tags as $tag){
			
			echo "{$tag->title} | {$tag->ts->created_at}<br>";
		}*/
		//dump(Category::query()->find(1)->latestActivePost);
		/*$tag = Tag::query()->find(5);
		dump($tag->posts);*/
		
		//Many To Many
		
		
		
		//One To Many
		/*$category = Category::query()->find(1);
		
		dump($category->toArray());
		
		$posts = $category->posts;
		
		dump($posts->toArray());*/
		
		/*$post = Post::query()->find(1);
		
		dump($post->toArray());
		
		dump($post->category->toArray());*/
		
		/*$categories = Category::all();
		
		//$categories = Category::with('posts')->get(); //жадная загрузка

		dump($categories->toArray());
		
		foreach ($categories as $category){
			
			echo "{$category->title}<br>";
			
			foreach ($category->posts as $post){
				
				echo "{$post->title}<br>";
			}
			
			echo '<hr>';
		}*/
		
		/*$categories = Category::query()->withCount('posts')->get();
		
		dump($categories->toArray());
		
		foreach ($categories as $category){
			
			echo "{$category->title} ({$category->posts_count})<br>";
		}*/
		//One To Many
		
		
		
		/*$post = Post::query()->find(3);

		dump($post->toArray());
		dump($post->category);*/

		/*$category = Category::query()->find(2);

		dump($category->toArray());

		dump($category->post->title);*/

		/*$post = Post::query()->where('category_id', '=', 2)->first();

		dump($post);*/

		/*$posts = Post::query()->get();
		dump($posts);
		
		$posts2 = DB::table('posts')->get();
		dump($posts2);

		$posts3 = DB::select('select * from posts');
		dump($posts3);
		
		return view('home.index', compact('posts', 'posts2', 'posts3'));*/
		
		
		/*$posts = Post::query()->get();      //три разных SQL запроса разными способами, первый вернёт обьекты, второй и третий - масивы стд класа
		dump($posts);
		
		$posts2 = DB::table('posts')->get();
		dump($posts2);

		$posts3 = DB::select('select * from posts');
		dump($posts3);*/
		
		/*$data = [1, 2, 3, 4, 5];
		
		$data = collect($data);     //из масива создали коллекцию и после туеррей обратнов масив вывели
		
		dump($data->toArray());*/
		
		/*$products = collect([
			
			['title' => 'Product 1', 'price' => 10],
			['title' => 'Product 2', 'price' => 15],
			['title' => 'Product 3', 'price' => 10],
			['title' => 'Product 4', 'price' => 20],
			['title' => 'Product 5', 'price' => 20],
		]);
		
		//dump($products);
		
		//dump($products->avg('price'));
		
		$filtered = $products->filter(function($value, $key){
			
			
			return $value['price'] > 10;
		});
		
		dump($filtered);
		
		return view('home.index', compact('products'));*/
		
		
		/*$users = [];
		
		return view('home.index', compact('users'));*/
		
		//models_start
		
		/*$post = Post::query()->find(11);       //удаление по айди через delete()
		
		dump($post->delete());*/
		
		//dump(Post::destroy(10));     //удаление через destroy
		//dump(Post::destroy(6,7,9));
		
		/*dump(Post::query()->create([
		
			'title' => 'Post 7',
			'content' => 'Post 7 content',
			'category_id' => rand(1, 2),
			'status' => 0,
		]));*/
		
		/*$post = new Post();
		
		$post->title = 'Post 5';
		
		$post->content = 'Post 5 content';
		
		$post->category_id = rand(1, 2);
		
		dump($post->save());
		
		dump($post->id);*/
		
		//$country = Country::query()->findOrFail('AFG');
		
		/*$country = Country::query()->find('AFG');
		
		if(!$country){
			
			abort(404);
		}*/
		
		/*dump('Count' . Country::query()->count());
		
		dump('Count' . Country::query()->where('Population', '<', 1_000_000)->count());
		
		dump('Max' . Country::query()->max('Population'));
		
		dump('Min' . Country::query()->min('Population'));
		
		dumpp('Avg' . Country::query()->avg('Population'));*/
		
		//$country = Country::query()->find('AFG');
		
		//dump($country->toArray());
		
		//$posts = Post::all()->toArray();
		
		//dump($posts);
		
		//$post = Post::query()->first();
		
		//dump($post);
		
		//$post = Post::query()->find(1, ['id', 'title', 'slug'])->toArray();
		
		//dump($post);
		
		/*$countries = Country::query()
			->where('Population', '>', 100_000_000)
			->orderBy('Population', 'desc')
			->limit(5)
			->get(['Code', 'Name', 'Population'])
			->toArray();
		dump($countries);*/
		
		/*$countries = Country::query()
			->where('Population', '>', 100_000_000)
			->orderBy('Population', 'desc')
			->limit(5)
			->get(['Code', 'Name', 'Population']);
			
		return $countries->toJson();
		
		return response()->json($countries);*/
		
		/*dump(DB::table('users')
			->where('id', '>', 4)
			->where('id', '<', 18)
			->delete()
		);*/
		
		/*$country = Country::query()->first();
		
		dump($country->toArray());
		dump($country->name());*/
		
		
		
		//models_finish
		
		
		
		//dump(DB::table('users')->delete(19));
		
		/*dump(
		
			DB::table('users')
				->where('id', '=', 18)
				->update(['name' => 'Darc', 'email' => 'darc_new@gmail.com'])
		);*/
		
		/*dump(
		
			DB::table('users')
				
				->updateOrInsert(
					
					['email' => 'darc_new2@gmail.com'],
					['name' => 'Darc New2', 'password' => 'new_password2']
					
				)
		);*/
		
		/*dump(DB::table('users')->insertGetId(
			[
			
				'name' => 'User 5',
				'email' => 'user5@mail.com',
				'password' => '555'
			],)
			
		);*/
		
		/*dump(
		
			DB::table('users')->insertOrIgnore([
			[
			
				'name' => 'User 2',
				'email' => 'user2@mail.com',
				'password' => '222'
			],
			[
			
				'name' => 'User 4',
				'email' => 'user4@mail.com',
				'password' => '444'
			],
			
			])
		);*/
		
		//$cities = DB::table('city')->whereIn('ID', [1,2,3])->get();
		
		//$users = DB::table('users')->get(['id', 'name', 'email',]);
		
		//$user = DB::table('users')->where('id', '=', 2)->first();
		
		//$user = DB::table('users')->where('id', '>', 3)->get();    //->value('name');    //->orderBy('name', 'desc')->get();    //->orderByDesc('name')->get();
		
		//$user = DB::table('users')->where('id', '>', 3)->get();
		
		//$users2 = DB::table('users')->find(3, ['id', 'name', 'email', ]);
		
		//$users2 = DB::table('users')->pluck('name', 'email');
		
		//dump($users2);
		
		/*
		DB::table('city')->orderBy('ID')->chunk(100, function(Collection $cities){
			
			foreach($cities as $city){
				
				if($city->Name == 'Salvador'){
					
					return false;
				}
			}
		});
		*/
		
		//$cities = DB::table('city')->select(['ID', 'Name'])->limit(10)->get();
		
		/*$cities = DB::table('city')
			->where('ID', '>', 3)
			->where('ID', '<', 10)
			->get();*/
			
		/*$cities = DB::table('city')
			->where([['ID', '>', 3], ['ID', '<', 10]])
			->orWhere('ID', '<', 20)
			->get();*/
			
		/*$cities = DB::table('city')
			->whereRaw('(ID between ? and ? and Name != ?) or (ID = ?)', [2, 10, 'Qandahar', 1])
			->get();*/
		
		/*$cities = DB::table('city')
			->orderBy('Population', 'desc')
			->first('Population');
		dump($cities->Population);*/
		
		/*
		$data = [
		
			'id' => 1,
			'name' => 'Kleopatra',
		];
		
		$users = DB::select('select id, name, email from users where id > :id and name != :name', $data);
		
		//$cnt = DB::select('select count(*) as cnt from users');
		
		$cnt = DB::scalar('select count(*) as cnt from users');
		
		dump($cnt);*/
		
		/*
		try {
			
			DB::beginTransaction();
				
			DB::insert("insert into users (name, email, password) VALUES (?, ?, ?)", ['d\'Arc', 'darc@gmail.com', 555]);
			
			DB::insert("insert into users (name, email, password) VALUES (?, ?, ?)", ['d\'Arc', 'darc@gmail.com', 555]);
				
			DB::commit();

		} catch (\Exception $e){
			
			DB::rollBack();
			
			dump($e->getMessage());
		}*/
		
		/*
		try {
			
			DB::transaction(function(){
				
				DB::insert("insert into users (name, email, password) VALUES (?, ?, ?)", ['d\'Arc', 'darc@gmail.com', 555]);
			
				DB::insert("insert into users (name, email, password) VALUES (?, ?, ?)", ['d\'Arc', 'darc@gmail.com', 555]);
				
			});

		} catch (\Exception $e){
			
			dump($e->getMessage());
		}*/
		
		//dump(DB::delete('delete from users where id = ?', [5]));
		
		//dump(DB::update("update users set created_at = NOW(), updated = ?", [date('Y-m-d H:i:s')]));
	
		//dump(DB::update("update users set avatar = ? where id = ?", ['image.jpg', 5]));
		
		//dump(DB::insert("insert into users (name, email, password) VALUES (?, ?, ?)", ['d\'Arc', 'darc@gmail.com', 555]));
		
		
		//old_fraction
		
		//$users = Http::get('https://jsonplaceholder.typicode.com/users')->json();
		
		//$users = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/users'), true);
		
		//dump($users);
		
		//$users = DB::select('select id, name, email from users where id > ? and name != ?', [1, 'Kleopatra']);
		
		//$users = DB::select('select id, name, email from users where id > :id and name != :name', ['id' => 1, 'name' => 'Kleopatra']);
		
		//return view('home.index', ['title' => 'Home page', 'description' => 'test desc', 'test' => 'Test Value']);
		
		/*
		return View::make('home.index', [
				'name' => 'Jhon', 
				'age' => 35, 
				'title' => 'Home Page',
				]);
		*/
		//return 'Home page';
		
	}
	
	public function store(Request $request){
		
		
		/*Post::query()->create($request->all());
		
		return $request->all();*/
		
		//var_dump($request->title());
		//var_dump($request->all());
		//var_dump($request->all(['title', 'content']));
		
	}
	
	public function update(Request $request){
		
		
		
		
		/*var_dump(
			
			Post::query()
				->where('id', $request->id)
				->update($request->all())
		);*/
		
		/*$post = Post::query()->findOrFail($request->id);
		$post->update($request->all());
		
		return 'ok';*/
		
		/*$post = Post::query()->find($request->id);
		$post->title = $request->title;
		$post->content = $request->content;
		$post->category_id = $request->category_id;
		$post->status = $request->status;
		$post()->save();
		
		return 'All is Oke';*/
		
	}
	
	
	public function test(){
		
		return view('home.test', ['title' => 'Test page']);
		
		/*
		$name = 'Katy';
		$age = 27;
		$title = 'Test Page';
		
		return view('home.test', compact('name', 'age', 'title'));
		*/
		
		//return 'Test page';
		
	}
	
	public function contact(){
		
		return view('home.contact', ['title' => 'Contact page']);
		
		/*
		$title = 'Contact Page';
		
		return view('home.contact')->with(['title' => $title, ]);
		*/

	}
	
	
}







?>