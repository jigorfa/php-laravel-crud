<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">
                    <h1 class="mb-0">Produtos:
                        <div class="text-end">
                            <a href="{{ route('admin/products/create') }}" class="btn btn-info">Novo</a>

                            <a href="{{ route('admin/dashboard') }}" class="btn btn-secondary">Voltar</a>
                        </div>
                    </h1>

                    @if(Session::has('create'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('create') }}
                    </div>
                    @endif

                    @if(Session::has('update'))
                    <div class="alert alert-warning" role="alert">
                        {{ Session::get('update') }}
                    </div>
                    @endif

                    @if(Session::has('delete'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('delete') }}
                    </div>
                    @endif

                    <hr>

                    <div class="p-4 table-responsive">
                        <table class="table table-hover rounded">
                            <thead class="table-light table-striped table-hover table-bordered border-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Ano</th>
                                    <th>Categoria</th>
                                    <th>Preço</th>
                                    <th>Operação</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse ($products as $product)
                                <tr>
                                    <td class="align-middle">{{ $loop->iteration }}</td>
                                    <td class="align-middle">{{ $product->title }}</td>
                                    <td class="align-middle">{{ $product->year }}</td>
                                    <td class="align-middle">{{ $product->category }}</td>
                                    <td class="align-middle">{{ $product->price }}</td>
                                    <td class="align-middle">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ route('admin/products/edit', ['id'=>$product->id]) }}" type="button" class="btn btn-warning">Editar</a>
                                            <a href="{{ route('admin/products/delete', ['id'=>$product->id]) }}" type="button" class="btn btn-danger">Deletar</a>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="text-center text-danger" colspan="6">Não há produtos cadastrados</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
