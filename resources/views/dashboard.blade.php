@extends('layouts/master')

@section('content')

    @javascript(compact('pusherKey', 'pusherCluster', 'usingNodeServer'))

    <dashboard id="dashboard" columns="6" rows="4">
        <twitter :initial-tweets="{{ json_encode($initialTweets) }}" position="a1:a3"></twitter>
        <packagist position="b1"></packagist>
        <npm position="b2"></npm>
        <github position="b3"></github>
        {{--<uptime position="b4"></uptime>--}}
        <world-cup position="a4:b4"></world-cup>
        <music position="c1:d1"></music>
        <tasks team-member="michelle" position="c2" base_modifiers="female"></tasks>
        <tasks team-member="helen" position="d2" base_modifiers="male"></tasks>
        <tasks team-member="ali" position="c3" base_modifiers="male"></tasks>
        <tasks team-member="mathäus" position="d3" base_modifiers="male"></tasks>
        <tasks team-member="katharina" position="c4" base_modifiers="female"></tasks>
        <tasks team-member="ahmed" position="d4" base_modifiers="male"></tasks>
        <tasks team-member="mayar" position="e2" base_modifiers="male"></tasks>
        <tasks team-member="markus" position="e3" base_modifiers="male"></tasks>
        <tasks team-member="sonia" position="e4" base_modifiers="female"></tasks>
        <tasks team-member="kevin" position="f4" base_modifiers="male"></tasks>
        <time-weather position="e1" date-format="W. dddd DD.MM" time-zone="Europe/Berlin" weather-city="Wesel"></time-weather>
        {{--<time-weather position="f1" date-format="W. dddd DD.MM" time-zone="Europe/Berlin" weather-city="Emmerich"></time-weather>--}}
        <calendar position="f1:f3"></calendar>
        <internet-connection></internet-connection>
    </dashboard>

@endsection
