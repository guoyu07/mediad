<?php

route()->group('/api', function () {
    route()->get('/buckets', 'BucketsController@select');
    route()->post('/buckets', 'BucketsController@create');
    route()->get('/buckets/{id}', 'BucketsController@find');
    route()->patch('/buckets/{id}', 'BucketsController@patch');
    route()->delete('/buckets/{id}', 'BucketsController@delete');

    route()->get('/drivers', 'DriversController@select');
    route()->post('/drivers', 'DriversController@create');
    route()->get('/drivers/{id}', 'DriversController@find');
    route()->patch('/drivers/{id}', 'DriversController@patch');
    route()->delete('/drivers/{id}', 'DriversController@delete');

    route()->get('/medias', 'MediasController@select');
    route()->get('/medias/{id}', 'MediasController@find');
    route()->post('/medias', 'MediasController@create');
    route()->patch('/medias/{id}', 'MediasController@patch');
    route()->delete('/medias/{id}', 'MediasController@delete');
});
