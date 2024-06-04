<?php
 
namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use Roots\Acorn\View\Composers\Concerns\AcfFields;

class App extends Composer
{

    use AcfFields;
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        $fields = collect($this->fields())->toArray();

        foreach ($fields['modules'] ?? [] as $i => $field) {
            $fields['modules'][$i]['identifier'] = md5(serialize($field) . $i);
        }
        return [
            'siteName' => $this->siteName(),
            'fields' => $fields,
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }
}
