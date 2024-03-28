<?php

namespace App\Livewire\Admin\Section;

use App\Models\OpeningHours;
use Livewire\Component;
use App\Models\TouristCategory;
use Livewire\Attributes\Validate;
use App\Models\TouristPlaces;
use Illuminate\Support\Str;

class AddTouristPlace extends Component
{
    #[Validate('required')]
    public $placeTitle = '';

    #[Validate('required')]
    public $category = '';

    #[Validate('required')]
    public $description = '';

    #[Validate('required')]
    public $location = '';

    #[Validate('required')]
    public $fees = '';

    public $guidelines = '';

    public $mondayIsClosed = '';

    public $mondayOpenTime = '';

    public $mondayCloseTime = '';

    public $tuesdayIsClosed = '';

    public $tuesdayOpenTime = '';


    public $tuesdayClosedTime = '';


    public $wednesdayIsClosed = '';


    public $wednesdayOpenTime = '';


    public $wednesdayClosedTime = '';


    public $thursdayIsClosed = '';


    public $thursdayOpenTime = '';


    public $thursdayClosedTime = '';



    public $fridayIsClosed = '';


    public $fridayOpenTime = '';


    public $fridayClosedTime = '';


    public $saturdayIsClosed = '';


    public $saturdayOpenTime = '';


    public $saturdayClosedTime = '';


    public $sundayIsClosed = '';


    public $sundayOpenTime = '';

    #[Validate('required')]
    public $sundayClosedTime = '';

    public function updateTouristPlace()
    {
        // dd($this->all());
        // session()->flash('place', true);
        $this->validate();


        // dd($OpeningHoursDetails);
        $touristplaceData = [
            'placeTitle' => $this->placeTitle,
            'category' => $this->category,
            'description' => $this->description,
            'location' => $this->location,
            'fees' => $this->fees,
            'guidelines' => $this->guidelines,
        ];

        $touristPlace = TouristPlaces::create($touristplaceData);
        // $OpeningHoursDetails = [];
        $openingHoursDays = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

        foreach ($openingHoursDays as $day) {

            if ($day != null)

                $status = '';
            $openingTime = '';
            $closingTime = '';

            switch ($day) {
                case 'Monday':
                    if ($this->mondayIsClosed != '') {
                        $status = $this->mondayIsClosed;
                        $openingTime = $this->mondayOpenTime;
                        $closingTime = $this->mondayCloseTime;
                    }
                    break;
                case 'Tuesday':

                    if ($this->tuesdayIsClosed != '') {
                        $status = $this->tuesdayIsClosed;
                        $openingTime = $this->tuesdayOpenTime;
                        $closingTime = $this->tuesdayClosedTime;
                    }
                    break;
                case 'Wednesday':
                    if ($this->wednesdayIsClosed != '') {
                        $status = $this->wednesdayIsClosed;
                        $openingTime = $this->wednesdayOpenTime;
                        $closingTime = $this->wednesdayClosedTime;
                    }
                    break;
                case 'Thursday':
                    if ($this->thursdayIsClosed != '') {
                        $status = $this->thursdayIsClosed;
                        $openingTime = $this->thursdayOpenTime;
                        $closingTime = $this->thursdayClosedTime;
                    }
                    break;
                case 'Friday':
                    if ($this->fridayIsClosed != '') {
                        $status = $this->fridayIsClosed;
                        $openingTime = $this->fridayOpenTime;
                        $closingTime = $this->fridayClosedTime;
                    }
                    break;
                case 'Saturday':
                    if ($this->saturdayIsClosed != '') {
                        $status = $this->saturdayIsClosed;
                        $openingTime = $this->saturdayOpenTime;
                        $closingTime = $this->saturdayClosedTime;
                    }
                    break;
                case 'Sunday':
                    if ($this->sundayIsClosed != '') {
                        $status = $this->sundayIsClosed;
                        $openingTime = $this->sundayOpenTime;
                        $closingTime = $this->sundayClosedTime;
                    }
                    break;
            }

            if ($status != '' || $status != true || $status != false) {

                $data = [
                    'tourist_place_id' => $touristPlace->id,
                    'days' => $day,
                    'status' => $status,
                    'opening_time' => $openingTime,
                    'closing_time' => $closingTime,
                ];

                // array_push($OpeningHoursDetails, $data);
                OpeningHours::create($data);
            }


        }

        // OpeningHours::insert($OpeningHoursDetails);

        $this->dispatch('refresh-place');
        return null;
    }
    public function render()
    {
        return view('livewire.admin.section.add-tourist-place')->with('touristcategories', TouristCategory::all());
    }
}
