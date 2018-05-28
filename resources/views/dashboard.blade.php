@extends('layouts/master')

@section('content')

@javascript(compact('pusherKey', 'pusherCluster', 'usingNodeServer'))

<dashboard id="dashboard" columns="6" rows="4">
    <twitter :initial-tweets="{{ json_encode($initialTweets) }}" position="a1:a3"></twitter>
    <uptime position="a1:a4"></uptime>
    <packagist position="b1"></packagist>
    <npm position="b2"></npm>
    <github position="b3"></github>
    <music position="d1"></music>
    <tasks team-member="michelle" position="c2" color="red"></tasks>
    <tasks team-member="helen" position="d2"></tasks>
    <tasks team-member="ali" position="c3"></tasks>
    <tasks team-member="mathäus" position="d3"></tasks>
    <tasks team-member="katharina" position="c4"></tasks>
    <tasks team-member="ahmed" position="d4"></tasks>
    <tasks team-member="mayar" position="e2"></tasks>
    <tasks team-member="markus" position="e3"></tasks>
    <tasks team-member="sonia" position="e4"></tasks>
    <time-weather position="f1" date-format="ddd DD/MM" time-zone="Europe/Berlin" weather-city="Wesel"></time-weather>
    <calendar position="f2:f4"></calendar>
    <internet-connection></internet-connection>
</dashboard>

@endsection
