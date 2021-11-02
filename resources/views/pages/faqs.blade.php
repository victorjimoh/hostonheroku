@extends('layouts.navbar')
@section('contents')
<section class="title-container text-center">
    <div class="container">
        <h2><b>Frequently Asked Questions.</b></h2>
    </div>
</section>
<section class="pt-5 pb-5">
    <div class="container">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    What is an inverter and how does it work?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    An inverter is a device that collects electricity and stores it in a battery, to be redeployed in times of power cuts. An inverter works by converting Direct Current (DC) which is stored in batteries to Alternating Current (AC) which our appliances require.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    How do I know which inverter and batteries I need?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    For the size of the inverter you need to know what is the total load you want to carry (number of bulbs, frigde, ACs, TV..) and add up the total Wattage.
For the size and number of batteries, you need to know how long power backup you need and the battery size that will allow you to reach that backup time.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Do you offer a warranty?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    Yes, they range from one year to two years, depending on the product.
                               </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Can I recharge my inverter with my Generator?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    Yes, you can. Though you should prioritise electrical supply from the grid (PHCN), the inverter will work just fine in conjunction with a generator.                               </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Should I place it outdoors or indoors?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    Home Inverters, especially ones used to power essential household appliances should be installed indoors. They must be set in dry areas and must be well ventilated.
Some people may prefer to have their inverters outdoor, most especially in the garage where there is enough space to accommodate them.  However, they must be kept in dry areas and away from direct sunlight. They should also be placed in a dust-free environment with the right amount of airspace.   
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    Are the running costs higher than for my generator?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    No, they are not. As highlighted in an earlier post, Advantages of inverters over generators, inverters are much cheaper to run than generators. They do not require constant maintenance, and most importantly – they do not need to be fuelled. There is only a minimal level of support carried out on an inverter.            </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    What is the lifespan of an inverter and what is the lifespan of batteries?
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    The lifespan of an inverter depends on the environment. If well looked after, and placed in a cool, dry, well-ventilated area, a good inverter can last up to 10 years. The lifespan of the battery depends on the number of ‘cycles’ it offers, and how often it is used.
                         </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection