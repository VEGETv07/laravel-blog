<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    // private $blogs = [
    //     [
    //         'id' => 3,
    //         'title' => 'The Importance of Sleep',
    //         'shortDesciption' => 'Adequate sleep is crucial for optimal health and functioning.',
    //         'content' => 'Sleep plays a vital role in various bodily functions, including metabolism, immune function, and cognitive performance. Chronic sleep deprivation has been linked to an increased risk of obesity, heart disease, and mental health disorders. To improve sleep quality, it\'s important to establish a regular sleep schedule, create a relaxing bedtime routine, and create a comfortable sleep environment.'
    //     ],
    //     [
    //         'id' => 4,
    //         'title' => 'Exploring Meditation Techniques',
    //         'shortDesciption' => 'Meditation is a powerful practice that can promote relaxation and mental clarity.',
    //         'content' => 'There are various meditation techniques, including mindfulness meditation, guided visualization, and loving-kindness meditation. Regular meditation practice has been associated with reduced stress, improved focus, and enhanced emotional well-being.'
    //     ],
    //     [
    //         'id' => 5,
    //         'title' => 'The Impact of Technology on Society',
    //         'shortDesciption' => 'Technology has transformed the way we live, work, and communicate.',
    //         'content' => 'While technology offers many benefits, such as increased efficiency and connectivity, it also raises concerns about privacy, social isolation, and job displacement. It\'s important for society to balance the advantages of technology with its potential drawbacks and to ensure that technological advancements benefit everyone.'
    //     ],
    //     [
    //         'id' => 6,
    //         'title' => 'The Art of Creative Writing',
    //         'shortDesciption' => 'Creative writing is a form of self-expression and storytelling.',
    //         'content' => 'Whether writing fiction, poetry, or memoir, creative writing allows individuals to explore their imagination and share their unique perspectives with others. Engaging in creative writing can enhance language skills, foster creativity, and provide a therapeutic outlet for emotions.'
    //     ], [
    //         'id' => 1,
    //         'title' => 'The Benefits of Regular Exercise',
    //         'shortDesciption' => 'Regular exercise has numerous benefits for both physical and mental health.',
    //         'content' => 'Regular exercise can improve cardiovascular health, strengthen muscles, and help maintain a healthy weight. It also releases endorphins, which can boost mood and reduce feelings of stress and anxiety. Additionally, exercise has been linked to improved sleep and cognitive function.'
    //     ],
    //     [
    //         'id' => 2,
    //         'title' => 'Tips for a Healthy Diet',
    //         'shortDesciption' => 'Maintaining a healthy diet is essential for overall well-being.',
    //         'content' => 'A healthy diet should include a variety of fruits, vegetables, whole grains, lean proteins, and healthy fats. It\'s important to limit processed foods, sugary drinks, and foods high in saturated and trans fats. Eating regular, balanced meals and staying hydrated are also important aspects of a healthy diet.'
    //     ],
    //     [
    //         'id' => 7,
    //         'title' => 'The Rise of Artificial Intelligence',
    //         'shortDesciption' => 'Artificial intelligence (AI) is reshaping industries and revolutionizing technology.',
    //         'content' => 'AI technology, including machine learning and neural networks, is being integrated into various sectors, such as healthcare, finance, and transportation. While AI offers opportunities for automation and innovation, it also raises ethical and societal concerns, such as job displacement and algorithmic bias.'
    //     ],
    //     [
    //         'id' => 8,
    //         'title' => 'Understanding Climate Change',
    //         'shortDesciption' => 'Climate change is a pressing global issue with far-reaching consequences.',
    //         'content' => 'Climate change refers to long-term changes in temperature, precipitation patterns, and sea levels, primarily due to human activities such as burning fossil fuels and deforestation. The impacts of climate change include extreme weather events, rising sea levels, and loss of biodiversity. Addressing climate change requires collective action to reduce greenhouse gas emissions and mitigate its effects.'
    //     ],
    //     [
    //         'id' => 9,
    //         'title' => 'The Art of Public Speaking',
    //         'shortDesciption' => 'Public speaking is a valuable skill for effective communication and leadership.',
    //         'content' => 'Whether delivering a presentation, participating in a debate, or giving a toast, public speaking allows individuals to convey their ideas with confidence and clarity. Key elements of effective public speaking include preparation, audience engagement, and delivery techniques such as eye contact and body language. With practice and feedback, anyone can improve their public speaking skills.'
    //     ]
    // ];

    public function index()
    {
        $blogs = DB::select('SELECT * FROM blogs');
        return view('pages.blog', ['blogs' => $blogs]);
    }
    public function showSingleBlog($id)
    {
        $blog = DB::select('SELECT * from blogs WHERE id =?', [$id]);
        if (!empty($blog)) {
            return view('pages.showblog', ['blog' => $blog[0]]);
        } else {
            return abort(404);
        }
    }
    public function pageAddBlog()
    {
        return view('pages.addblog');
    }
    public function addBlog(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'content' => 'required'
        ]);
        $title = $request->title;
        $description = $request->description;
        $content = $request->content;
        DB::insert('INSERT INTO blogs (title, description, content) VALUES (?,?,?)', [$title, $description, $content]);
        return redirect(route('blog'));
    }
    public function updateBlog($id)
    {
        $blog = DB::select('SELECT * from blogs WHERE id =?', [$id]);
        return view('pages.updateblog', ['blog' => $blog[0]]);
    }
    public function validateUpdateBlog(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'content' => 'required'
        ]);
        $id = $request->id;
        $title = $request->title;
        $description = $request->description;
        $content = $request->content;
        DB::insert('UPDATE blogs SET title=?, description=?, content=? where id = ?', [$title, $description, $content, $id]);
        return redirect(route('blog'));
    }
    public function deleteBlog($id)
    {
        DB::delete('DELETE FROM blogs WHERE id=?', [$id]);
        return redirect(route('blog'));
    }
    // public function show($id)
    // {

    //     $blog = $this->findById($id);
    //     if (is_null($blog))
    //         return abort(404);
    //     return view('pages.showblog', ['blog' => $blog]);
    // }

    // public function findById($id)
    // {
    //     foreach ($this->blogs as $blog) {
    //         if ($blog['id'] === (int)$id)
    //             return $blog;
    //     }
    //     return null;
    // }
}
