@extends('layout')

@section('head')
Séries
@endsection

@section('conteudo')
    @if(!empty($mensagem))
    <div class="alert alert-success">
        {{$mensagem}}
    </div>
    @endif
    <a href="{{ route('form_criar_serie') }}" class="btn btn-primary mb-2">Adicionar</a>
    <ul class="list-group">
        @foreach($series as $serie)
        <li class="list-group-item d-flex justify-content-between align-items-center">{{ $serie->nome }}
            <form method="post" action="/series/{{$serie->id}}" onsubmit="return
                confirm('Deseja excluir essa série?')">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">
                <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
            </form>
        </li>
        @endforeach
    </ul>
    <!-- onclick="deleteConfirmation({{$serie->id}})" -->
    <!--  -->
@endsection

<script type="text/javascript">
     function deleteConfirmation(id) {
        console.log("entrou", id)

        Swal.fire({
            title: 'Deseja excluir essa série?',
            text: "Isso não poderá ser revertido!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim, excluir'
            cancelButtonText: 'Não, cancelar'
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'POST',
                    url: "{{url('/series/')}}/" + id,
                    dataType: 'JSON',
                    success: function (results) {

                        if (results.success === true) {
                            Swal.fire(
                                'Excluido com sucesso!',
                                'success'
                            )
                        } else {
                            swal("Ocorreu um erro ao excluir!", results.message, "error");
                        }
                    }
                });
            }
        })

        return false
        swal({
            title: "Deseja excluir essa série?",
            text: "Essa ação não poderá ser revertida!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Sim, excluir!",
            cancelButtonText: "Não, cancelar!",
            reverseButtons: !0
        }).then(function (e) {

            if (e.value === true) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    type: 'POST',
                    url: "{{url('/series/')}}/" + id,
                    data: {_token: CSRF_TOKEN},
                    dataType: 'JSON',
                    success: function (results) {

                        if (results.success === true) {
                            swal("Removido com sucesso!", results.message, "success");
                        } else {
                            swal("Ocorreu um erro ao excluir!", results.message, "error");
                        }
                    }
                });

            } else {
                e.dismiss;
            }

        }, function (dismiss) {
            return false;
        })
    }
</script>
