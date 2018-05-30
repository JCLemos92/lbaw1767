@extends('template.static_template')

@section('content')

<p>Lista de itens da tabela test</p>

<table>
	<tr>
		<th>ID</th>
		<th>Text</th>
	</tr>
	@foreach($itens as $item)
		<tr>
			<td>{{$item->id}}</td>
			<td>{{$item->info}}</td>
		</tr>
	@endforeach
</table>

<a href="{{route('create')}}">Cadastrar</a>

@endsection