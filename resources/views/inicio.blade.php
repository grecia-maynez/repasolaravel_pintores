@extends('layouts.master')
@section('title', 'inicio')
    @section('header')
        <br>
            <h1>Pagina principal</h1>
        <br>
    @stop
    @section('navbar')
    <div>
    <table >
        <tr>
            <td> <a href="{{action('EstructurasDeControl@nh')}}"><img src="../images/nhinicio.png" alt="" class="c"></a></td>
            <td></td>
            <td><a href="{{action('EstructurasDeControl@car')}}"><img src="../images/cinicio.png" alt="" class="c"></a></td>
            <td><a href="{{action('EstructurasDeControl@rm')}}"><img src="../images/rminicio.png" alt="" class="c"></a></td>
            <td><a href="{{action('EstructurasDeControl@v')}}"><img src="../images/vinicio.png" alt="" class="c"></a></td>
            <td><a href="{{action('EstructurasDeControl@fk')}}"><img src="../images/fkinicio.png" alt="" class="c"></a></ul></td>
        </tr>
    </table>
    </div>
    @stop
    @section('content')
    @stop
    @section('footer')
        @parent
    @stop

