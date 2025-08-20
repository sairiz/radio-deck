<?php

use JaOcero\RadioDeck\Forms\Components\RadioDeck;

it('can instantiate RadioDeck component', function () {
    $radioDeck = RadioDeck::make('test_radio');
    
    expect($radioDeck)->toBeInstanceOf(RadioDeck::class);
    expect($radioDeck->getName())->toBe('test_radio');
});

it('can set options on RadioDeck', function () {
    $radioDeck = RadioDeck::make('test_radio')
        ->options(['option1' => 'Option 1', 'option2' => 'Option 2']);
    
    $options = $radioDeck->getOptions();
    expect($options)->toHaveKey('option1');
    expect($options)->toHaveKey('option2');
    expect($options['option1'])->toBe('Option 1');
});

it('can set descriptions on RadioDeck', function () {
    $radioDeck = RadioDeck::make('test_radio')
        ->options(['option1' => 'Option 1', 'option2' => 'Option 2'])
        ->descriptions(['option1' => 'Description 1', 'option2' => 'Description 2']);
    
    expect($radioDeck->hasDescription('option1'))->toBe(true);
    expect($radioDeck->getDescription('option1'))->toBe('Description 1');
});

it('can set multiple mode on RadioDeck', function () {
    $radioDeck = RadioDeck::make('test_radio')
        ->multiple();
    
    expect($radioDeck->isMultiple())->toBe(true);
});