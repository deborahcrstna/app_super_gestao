<h3> FORNECEDOR    </h3>


@php
/*
if () {

} else if () {

} else {

}
*/

@endphp



{{-- SINTAXE DO BLADE PARA CONDIÇÕES ( IF E ELSE ) --}}
@if (count ($fornecedores) > 0 && count ($fornecedores) < 10 )
<h3> Existem alguns fornecedores cadastrados. </h3>
@elseif (count ($fornecedores)> 10)
<h3> Existem vários fornecedores cadastrados. </h3> 
@else 
<h3> Ainda não existem fornecedores cadastrados. </h3> 

@endif