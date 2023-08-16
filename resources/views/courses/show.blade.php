<x-app-layout>
    <section class="bg-gray-700 py-12">
        <div class="container grid grid-cols-2 gap-6">
            <figure>
                <img src="{{Storage::url($course->images->url)}}" alt="">
            </figure>

            <div>
                <h1>{{$course->title}}</h1>
                <h1>{{$course->subtitle}}</h1>
                <p>Nivel: {{$course->level->name}}</p>
                <p>Categoria: {{$course->category->name}}</p>
                <p>Matriculados: {{$course->students_count}}</p>
                <p>Calificacion: {{$course->rating}}</p>
            </div>
        </div>
    </section>
</x-app-layout>