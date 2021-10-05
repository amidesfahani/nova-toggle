# Toggle Field
A drop in replacement for the default Boolean field

## Installation
Same as most other Nova Packages
```
composer require amidesfahani/nova-toggle
```

## Usage
The Toggle has all the same options as the Boolean field so you can set the values to be stored in the Model.

```php
use Amid\NovaToggle\Toggle;
```

```php
Toggle::make('Active')
    ->inlineOnIndex()
    ->inlineOnDetail()
    ->trueText('On')
    ->falseText('Off')
    ->textOnIndex()
```

In addition you can set visual parameters

### Labels
You can show both, or each state label
```php
Toggle::make('Active')
    ->showLabels() //Both labels
    ->showOnlyTrueLabel() //True label only
    ->showOnlyFalseLabel() //False label only
```


### Size
You can set the width and height. Setting the width will auto scale the height, but you can override this with ->height().
Defaults are 60 (px) and 26 (px) 
```php
Toggle::make('Active')
    ->width(80)
    ->height(45) //To override scaling
```


### Colors
You can set wither or both of the background colours for the Toggle. By default True is the Nova 'Success Green' [ var(--success) ] and false is a Grey 60 [ var(--60) ]
```php
Toggle::make('Active')
    ->trueColor('pink')
    ->falseColor('#fcfcfc')
```

### Speed
You can set the animation speed in ms with
```php
Toggle::make('Active')
    ->speed(500)
```
The default is 300ms


### Toggle on index
You can activate the toggle on index as well with
```php
Toggle::make('Active')
    ->inlineOnIndex()
```

## Original Package
- [davidpiesse/nova-toggle](https://github.com/davidpiesse/nova-toggle)