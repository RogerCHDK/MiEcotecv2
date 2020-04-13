@extends('layouts.header-footer-usuario')

@section('content')
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-center m-0 font-weight-bold" style="color: #267d24;font-size: 25px;">Crear evento</p>
        </div>
        <div class="card-body">
            <div class="row d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center">
                <div class="col-lg-7 col-lg-7-event">
                    <div class="p-5">
                        <form class="user">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0" style="min-width: 80%;">
                                    <input class="form-control form-control-user" type="text" placeholder="Nombre del evento" name="nombreEvento" style="font-size: 18px;color: rgb(0,0,0);">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0" style="min-width: 90%;">
                                    <textarea class="form-control form-control-user" placeholder="Objetivo" name="objetivo" style="font-size: 18px;color: rgb(0,0,0);"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0" style="min-width: 100%;">
                                    <textarea class="form-control form-control-user" placeholder="Descripción" name="descripcion" style="font-size: 18px;color: rgb(0,0,0);"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label style="font-size: 18px;color: rgb(0,0,0);">Fecha de inicio</label>
                                    <div class="form-row">
                                        <div class="col d-xl-flex justify-content-xl-start">
                                            <select class="form-control display-inline-block" style="height: 50px;font-size: 18px;color: rgb(0,0,0);" name="diaInicio">
                                                <optgroup label="Día">
                                                    <option value="1" selected="">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                </optgroup>
                                            </select>
                                            <select class="form-control display-inline-block" style="height: 50px;font-size: 18px;color: rgb(0,0,0);width: 145px;" name="mesInicio">
                                                <optgroup label="Mes">
                                                    <option value="01">Enero</option>
                                                    <option value="02">Febrero</option>
                                                    <option value="03">Marzo</option>
                                                    <option value="04">Abril</option>
                                                    <option value="04">Mayo</option>
                                                    <option value="06">Junio</option>
                                                    <option value="07">Julio</option>
                                                    <option value="08">Agosto</option>
                                                    <option value="09">Septiembre</option>
                                                    <option value="10">Octubre</option>
                                                    <option value="11">Noviembre</option>
                                                    <option value="12">Diciembre</option>
                                                </optgroup>
                                            </select>
                                            <input class="form-control form-control-user" type="number" style="font-size: 18px;color: rgb(0,0,0);width: 100px;" placeholder="Año" value="2020" name="anioInicio">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label style="font-size: 18px;color: rgb(0,0,0);">Hora de inicio</label>
                                    <div class="form-row">
                                        <div class="col d-xl-flex justify-content-xl-start">
                                            <select class="form-control display-inline-block" style="height: 50px;font-size: 18px;color: rgb(0,0,0);" name="horaInicio">
                                                <optgroup label="Hora">
                                                    <option value="0" selected="">00</option>
                                                    <option value="1">01</option>
                                                    <option value="2">02</option>
                                                    <option value="3">03</option>
                                                    <option value="4">04</option>
                                                    <option value="5">05</option>
                                                    <option value="5">06</option>
                                                    <option value="7">07</option>
                                                    <option value="8">08</option>
                                                    <option value="9">09</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                </optgroup>
                                            </select>
                                            <select class="form-control display-inline-block" style="height: 50px;font-size: 18px;color: rgb(0,0,0);" name="minutosInicio">
                                                <optgroup label="Minutos">
                                                    <option value="0" selected="">00</option>
                                                    <option value="1">01</option>
                                                    <option value="2">02</option>
                                                    <option value="3">03</option>
                                                    <option value="4">04</option>
                                                    <option value="5">05</option>
                                                    <option value="5">06</option>
                                                    <option value="7">07</option>
                                                    <option value="8">08</option>
                                                    <option value="9">09</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label style="font-size: 18px;color: rgb(0,0,0);">Fecha de finalización</label>
                                    <div class="form-row">
                                        <div class="col d-xl-flex justify-content-xl-start">
                                            <select class="form-control display-inline-block" style="height: 50px;font-size: 18px;color: rgb(0,0,0);" name="diaFin">
                                                <optgroup label="Día">
                                                    <option value="1" selected="">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                </optgroup>
                                            </select>
                                            <select class="form-control display-inline-block" style="height: 50px;font-size: 18px;color: rgb(0,0,0);width: 145px;" name="mesFin">
                                                <optgroup label="Mes">
                                                    <option value="01" selected="">Enero</option>
                                                    <option value="02">Febrero</option>
                                                    <option value="03">Marzo</option>
                                                    <option value="04">Abril</option>
                                                    <option value="04">Mayo</option>
                                                    <option value="06">Junio</option>
                                                    <option value="07">Julio</option>
                                                    <option value="08">Agosto</option>
                                                    <option value="09">Septiembre</option>
                                                    <option value="10">Octubre</option>
                                                    <option value="11">Noviembre</option>
                                                    <option value="12">Diciembre</option>
                                                </optgroup>
                                            </select>
                                            <input class="form-control form-control-user" type="number" style="font-size: 18px;color: rgb(0,0,0);width: 100px;" placeholder="Año" value="2020" name="anioFin">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label style="font-size: 18px;color: rgb(0,0,0);">Hora de finalización</label>
                                    <div class="form-row">
                                        <div class="col d-xl-flex justify-content-xl-start">
                                            <select class="form-control display-inline-block" style="height: 50px;font-size: 18px;color: rgb(0,0,0);" name="horaFin">
                                                <optgroup label="Hora">
                                                    <option value="0" selected="">00</option>
                                                    <option value="1">01</option>
                                                    <option value="2">02</option>
                                                    <option value="3">03</option>
                                                    <option value="4">04</option>
                                                    <option value="5">05</option>
                                                    <option value="5">06</option>
                                                    <option value="7">07</option>
                                                    <option value="8">08</option>
                                                    <option value="9">09</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                    <option value="32">32</option>
                                                    <option value="33">33</option>
                                                    <option value="34">34</option>
                                                    <option value="35">35</option>
                                                    <option value="36">36</option>
                                                    <option value="37">37</option>
                                                    <option value="38">38</option>
                                                    <option value="39">39</option>
                                                    <option value="40">40</option>
                                                    <option value="41">41</option>
                                                    <option value="42">42</option>
                                                    <option value="43">43</option>
                                                    <option value="44">44</option>
                                                    <option value="45">45</option>
                                                    <option value="46">46</option>
                                                    <option value="47">47</option>
                                                    <option value="48">48</option>
                                                    <option value="49">49</option>
                                                    <option value="50">50</option>
                                                    <option value="51">51</option>
                                                    <option value="52">52</option>
                                                    <option value="53">53</option>
                                                    <option value="54">54</option>
                                                    <option value="55">55</option>
                                                    <option value="56">56</option>
                                                    <option value="57">57</option>
                                                    <option value="58">58</option>
                                                    <option value="59">59</option>
                                                </optgroup>
                                            </select>
                                            <select class="form-control display-inline-block" style="height: 50px;font-size: 18px;color: rgb(0,0,0);" name="minutosFin">
                                                <optgroup label="Minutos">
                                                    <option value="0" selected="">00</option>
                                                    <option value="1">01</option>
                                                    <option value="2">02</option>
                                                    <option value="3">03</option>
                                                    <option value="4">04</option>
                                                    <option value="5">05</option>
                                                    <option value="5">06</option>
                                                    <option value="7">07</option>
                                                    <option value="8">08</option>
                                                    <option value="9">09</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 d-xl-flex align-items-xl-center mb-3 mb-sm-0" style="min-width: 100%;">
                                    <label style="font-size: 18px;color: rgb(0,0,0);margin-right: 10px;width: 350px;">Imagen (800x533 pixeles)</label>
                                    <input type="file" name="imagen" accept="image/*" style="font-size: 18px;color: rgb(0,0,0);width: 100%;">
                                </div>
                                <div class="col-sm-6 d-flex justify-content-center mb-3 mb-sm-0" style="margin-top: 10px;">
                                    <img src="assets/img/Eventos/image2.jpg" style="width: 100%;">
                                </div>
                            </div>
                            <button class="btn btn-primary btn-block text-white btn-user" type="submit" style="font-size: 18px;width: 80%;margin: auto;">Crear evento</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection