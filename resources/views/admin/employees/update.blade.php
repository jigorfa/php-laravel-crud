<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">
                    <h1 class="mb-0">Editar funcionários:</h1>

                    <p>
                        <a href="{{ route('admin/employees') }}" class="btn btn-secondary">Voltar</a>
                    </p>

                    @if(Session::has('update'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ Session::get('update') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                    <form action="{{ route('admin/employees/update', $employees->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Nome: (*)</label>
                                <input type="text" name="name" class="form-control" placeholder="Nome:" value="{{$employees->name}}">
                                @error('name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Nascimento: (*)</label>
                                <input type="date" name="year" class="form-control" placeholder="Data de nascimento:" value="{{$employees->year}}">
                                @error('year')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label class="form-label">Função: (*)</label>
                                <input type="text" name="function" class="form-control" placeholder="Categoria:" value="{{$employees->function}}">
                                @error('function')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="d-grid">
                                <button class="btn btn-success">Editar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
