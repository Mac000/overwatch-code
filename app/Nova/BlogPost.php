<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;

class BlogPost extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\BlogPost::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param NovaRequest $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            //TODO: Add required constraints.
            ID::make(__('ID'), 'id')->sortable(),
            Text::make('Created At', 'written_at'),
            Text::make('Slug', 'slug'),
            Text::make('Name', 'name')->rules('required', 'string')
                ->help('"Name" is for your reference inside Nova. This is not used anywhere on the site'),
            Boolean::make('Featured Post?', 'featured')->rules('nullable'),
            Image::make('Banner Image', 'banner_image')->disk('blog_posts')
                ->preview(function ($value, $disk) {
                    return Storage::disk($disk)->url($value);
                })
                ->thumbnail(function ($value, $disk) {
                    return Storage::disk($disk)->url($value);
                })
                ->storeOriginalName('name')
                ->store(function (Request $request, $model) {
                    $disk = "blog_posts";
                    return [
                        'banner_image' => $request->banner_image->storeAs("", $request->banner_image->getClientOriginalName(), $disk),
                    ];
                }),
            Image::make('Featured Image', 'featured_image')->disk('blog_posts')
                ->preview(function ($value, $disk) {
                    return Storage::disk($disk)->url($value);
                })
                ->thumbnail(function ($value, $disk) {
                    return Storage::disk($disk)->url($value);
                })
                ->storeOriginalName('name')
                ->store(function (Request $request, $model) {
                    $disk = "blog_posts";
                    return [
                        'featured_image' => $request->featured_image->storeAs("", $request->featured_image->getClientOriginalName(), $disk),
                    ];
                }),

            new Panel('English Blog', $this->englishFields()),
            new Panel('Arabic Blog', $this->urduFields()),
        ];
    }

    /**
     * Get the Blog English fields.
     *
     * @return array
     */
    protected function englishFields()
    {
        return [
            Text::make('Title', 'title')->rules('required', 'string'),
            Text::make('Short Description', 'short_description')->rules('required', 'string')->hideFromIndex(),
            Trix::make('Content', 'content')->withFiles('blog_posts')->alwaysShow(),
        ];
    }

    /**
     * Get the Blog Arabic fields.
     *
     * @return array
     */
    protected function urduFields()
    {
        return [
            Text::make('Title (UR)', 'ur_title')->rules('required', 'string'),
            Text::make('Short Description (UR)', 'ur_short_description')->rules('required', 'string')->hideFromIndex(),
            Trix::make('Content (UR)', 'ur_content')->withFiles('blog_posts')->alwaysShow(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
