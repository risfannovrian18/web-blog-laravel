<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Risfan Novrian',
        //     'email' => 'risfan.novrian@unida.ac.id',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Vitaloka Ervinayanti Ruswanda',
        //     'email' => 'vitaloka.ervinayanti.ruswanda@unida.ac.id',
        //     'password' => bcrypt('54321')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate quo iste veritatis officia maiores dolore illo consequatur eum blanditiis odit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente ad ipsum debitis deserunt eius repellendus! Assumenda doloremque enim quis rem maxime dolor vero veritatis possimus soluta consequatur culpa repellat fugit placeat inventore ipsum porro pariatur, neque obcaecati eligendi. Laborum ipsa possimus ex. Ipsum reprehenderit officia dolor nostrum magni, itaque doloremque, aperiam labore optio maiores aliquid sequi voluptate alias molestias earum excepturi molestiae totam cumque ullam laudantium aut! Maxime aut aliquam hic dicta, dolores laboriosam consectetur quaerat nostrum porro modi minus ullam, vel minima in debitis, itaque nam exercitationem cupiditate. Iure, commodi sapiente possimus minima dignissimos nihil repellat quis, beatae nam sint odio laboriosam qui suscipit obcaecati aspernatur pariatur voluptatum corrupti facilis dolores eveniet sunt? At quam suscipit odio reiciendis inventore!</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo eveniet soluta sed tenetur dolore aperiam, sit error veritatis, unde corporis, enim nam obcaecati voluptates molestiae laboriosam praesentium! Omnis excepturi debitis ducimus error nemo at repellat corporis eveniet, quidem placeat obcaecati quod dolore rem! Modi sapiente culpa mollitia beatae id! Alias consectetur dolore sequi unde vero eaque facilis ut sit inventore expedita rerum asperiores ex optio facere aliquam esse repellendus, fugiat delectus vitae? Nam repellat laborum similique nulla debitis sed officiis a quia numquam deleniti obcaecati amet illo in at, nemo eos, consequatur minus? Quis, iusto ratione! Autem quaerat maiores omnis?</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium eaque voluptates ad, fuga rerum, aliquid, doloremque recusandae ea beatae quae temporibus aperiam officia culpa velit. Repellendus cum, doloremque molestiae sit dolor enim quod nemo odit minima error incidunt. Veritatis quasi expedita architecto, eos illo cumque obcaecati possimus corporis minima minus quos eius omnis vitae aliquam vel eum inventore. Asperiores ipsam, omnis est esse saepe debitis vel maiores eveniet quam voluptatem illum soluta voluptates nemo tempora incidunt ea nobis perspiciatis voluptate officia minima! Molestiae culpa soluta veritatis. Beatae harum natus consequuntur sint. Architecto deleniti minima totam sunt pariatur sapiente incidunt perspiciatis.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate quo iste veritatis officia maiores dolore illo consequatur eum blanditiis odit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente ad ipsum debitis deserunt eius repellendus! Assumenda doloremque enim quis rem maxime dolor vero veritatis possimus soluta consequatur culpa repellat fugit placeat inventore ipsum porro pariatur, neque obcaecati eligendi. Laborum ipsa possimus ex. Ipsum reprehenderit officia dolor nostrum magni, itaque doloremque, aperiam labore optio maiores aliquid sequi voluptate alias molestias earum excepturi molestiae totam cumque ullam laudantium aut! Maxime aut aliquam hic dicta, dolores laboriosam consectetur quaerat nostrum porro modi minus ullam, vel minima in debitis, itaque nam exercitationem cupiditate. Iure, commodi sapiente possimus minima dignissimos nihil repellat quis, beatae nam sint odio laboriosam qui suscipit obcaecati aspernatur pariatur voluptatum corrupti facilis dolores eveniet sunt? At quam suscipit odio reiciendis inventore!</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo eveniet soluta sed tenetur dolore aperiam, sit error veritatis, unde corporis, enim nam obcaecati voluptates molestiae laboriosam praesentium! Omnis excepturi debitis ducimus error nemo at repellat corporis eveniet, quidem placeat obcaecati quod dolore rem! Modi sapiente culpa mollitia beatae id! Alias consectetur dolore sequi unde vero eaque facilis ut sit inventore expedita rerum asperiores ex optio facere aliquam esse repellendus, fugiat delectus vitae? Nam repellat laborum similique nulla debitis sed officiis a quia numquam deleniti obcaecati amet illo in at, nemo eos, consequatur minus? Quis, iusto ratione! Autem quaerat maiores omnis?</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium eaque voluptates ad, fuga rerum, aliquid, doloremque recusandae ea beatae quae temporibus aperiam officia culpa velit. Repellendus cum, doloremque molestiae sit dolor enim quod nemo odit minima error incidunt. Veritatis quasi expedita architecto, eos illo cumque obcaecati possimus corporis minima minus quos eius omnis vitae aliquam vel eum inventore. Asperiores ipsam, omnis est esse saepe debitis vel maiores eveniet quam voluptatem illum soluta voluptates nemo tempora incidunt ea nobis perspiciatis voluptate officia minima! Molestiae culpa soluta veritatis. Beatae harum natus consequuntur sint. Architecto deleniti minima totam sunt pariatur sapiente incidunt perspiciatis.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate quo iste veritatis officia maiores dolore illo consequatur eum blanditiis odit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente ad ipsum debitis deserunt eius repellendus! Assumenda doloremque enim quis rem maxime dolor vero veritatis possimus soluta consequatur culpa repellat fugit placeat inventore ipsum porro pariatur, neque obcaecati eligendi. Laborum ipsa possimus ex. Ipsum reprehenderit officia dolor nostrum magni, itaque doloremque, aperiam labore optio maiores aliquid sequi voluptate alias molestias earum excepturi molestiae totam cumque ullam laudantium aut! Maxime aut aliquam hic dicta, dolores laboriosam consectetur quaerat nostrum porro modi minus ullam, vel minima in debitis, itaque nam exercitationem cupiditate. Iure, commodi sapiente possimus minima dignissimos nihil repellat quis, beatae nam sint odio laboriosam qui suscipit obcaecati aspernatur pariatur voluptatum corrupti facilis dolores eveniet sunt? At quam suscipit odio reiciendis inventore!</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo eveniet soluta sed tenetur dolore aperiam, sit error veritatis, unde corporis, enim nam obcaecati voluptates molestiae laboriosam praesentium! Omnis excepturi debitis ducimus error nemo at repellat corporis eveniet, quidem placeat obcaecati quod dolore rem! Modi sapiente culpa mollitia beatae id! Alias consectetur dolore sequi unde vero eaque facilis ut sit inventore expedita rerum asperiores ex optio facere aliquam esse repellendus, fugiat delectus vitae? Nam repellat laborum similique nulla debitis sed officiis a quia numquam deleniti obcaecati amet illo in at, nemo eos, consequatur minus? Quis, iusto ratione! Autem quaerat maiores omnis?</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium eaque voluptates ad, fuga rerum, aliquid, doloremque recusandae ea beatae quae temporibus aperiam officia culpa velit. Repellendus cum, doloremque molestiae sit dolor enim quod nemo odit minima error incidunt. Veritatis quasi expedita architecto, eos illo cumque obcaecati possimus corporis minima minus quos eius omnis vitae aliquam vel eum inventore. Asperiores ipsam, omnis est esse saepe debitis vel maiores eveniet quam voluptatem illum soluta voluptates nemo tempora incidunt ea nobis perspiciatis voluptate officia minima! Molestiae culpa soluta veritatis. Beatae harum natus consequuntur sint. Architecto deleniti minima totam sunt pariatur sapiente incidunt perspiciatis.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate quo iste veritatis officia maiores dolore illo consequatur eum blanditiis odit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente ad ipsum debitis deserunt eius repellendus! Assumenda doloremque enim quis rem maxime dolor vero veritatis possimus soluta consequatur culpa repellat fugit placeat inventore ipsum porro pariatur, neque obcaecati eligendi. Laborum ipsa possimus ex. Ipsum reprehenderit officia dolor nostrum magni, itaque doloremque, aperiam labore optio maiores aliquid sequi voluptate alias molestias earum excepturi molestiae totam cumque ullam laudantium aut! Maxime aut aliquam hic dicta, dolores laboriosam consectetur quaerat nostrum porro modi minus ullam, vel minima in debitis, itaque nam exercitationem cupiditate. Iure, commodi sapiente possimus minima dignissimos nihil repellat quis, beatae nam sint odio laboriosam qui suscipit obcaecati aspernatur pariatur voluptatum corrupti facilis dolores eveniet sunt? At quam suscipit odio reiciendis inventore!</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo eveniet soluta sed tenetur dolore aperiam, sit error veritatis, unde corporis, enim nam obcaecati voluptates molestiae laboriosam praesentium! Omnis excepturi debitis ducimus error nemo at repellat corporis eveniet, quidem placeat obcaecati quod dolore rem! Modi sapiente culpa mollitia beatae id! Alias consectetur dolore sequi unde vero eaque facilis ut sit inventore expedita rerum asperiores ex optio facere aliquam esse repellendus, fugiat delectus vitae? Nam repellat laborum similique nulla debitis sed officiis a quia numquam deleniti obcaecati amet illo in at, nemo eos, consequatur minus? Quis, iusto ratione! Autem quaerat maiores omnis?</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium eaque voluptates ad, fuga rerum, aliquid, doloremque recusandae ea beatae quae temporibus aperiam officia culpa velit. Repellendus cum, doloremque molestiae sit dolor enim quod nemo odit minima error incidunt. Veritatis quasi expedita architecto, eos illo cumque obcaecati possimus corporis minima minus quos eius omnis vitae aliquam vel eum inventore. Asperiores ipsam, omnis est esse saepe debitis vel maiores eveniet quam voluptatem illum soluta voluptates nemo tempora incidunt ea nobis perspiciatis voluptate officia minima! Molestiae culpa soluta veritatis. Beatae harum natus consequuntur sint. Architecto deleniti minima totam sunt pariatur sapiente incidunt perspiciatis.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2

        // ]);
    }
}
