@include('partials.header')

<h1 class="font-bold text-white">Books</h1>
<table class="shadow-2x1 border-2 border-gray-200">
        <tr class="text-white">
            <td class="px-4 py-2">ID</td>
            <td class="px-4 py-2">ISBN</td>
            <td class="px-4 py-2">TITLE</td>
            <td class="px-4 py-2">AUTHOR</td>
            <td class="px-4 py-2">DESCRIPTION</td>
            <td class="px-4 py-2">DATE PUBLISHED</td>
        </tr>
    @foreach ($books as $bks)
    <tr class="border-b border-gray-200">
        <td class="px-4 py-2">{{$bks['id']}}</td>
        <td class="px-4 py-2">{{$bks['isbn']}}</td>
        <td class="px-4 py-2">{{$bks['title']}}</td>
        <td class="px-4 py-2">{{$bks['author']}}</td>
        <td class="px-4 py-2">{{$bks['description']}}</td>
        <td class="px-4 py-2">{{$bks['date_published']}}</td>
    </tr>
        @endforeach
        
        
</table>

@include('partials.footer')