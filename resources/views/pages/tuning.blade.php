@extends('layouts.app')
@section('content')
    <div class="tuning">
        <h1>Performance, Tuning, Detailing</h1>
        <div class="card_container_tuning">
            <div class="card">
                <img class="chip_img" src="{{ url('assets/Images/chip_tuning.png') }}" alt="chip_tuning">
                <h3 class="chip_title">Chip Tuning</h3>
                <p class="title">Stage 1,2,3,4</p>
                <p>Stage tuning describes the manner in which various upgrades and enhancements are made to your vehicle. Each stage depicts a different level of upgrades that are fitted as a set, as well as how far you've gone with tuning parts of your car.</p>
            </div>
            <div class="card">
                <img class="det_img" src="{{ url('assets/Images/auto_detailing.png') }}" alt="auto_detailing">
                <h3 class="auto_detailing">Auto Detailing</h3>
                <p class="title_autodetailing">Exterior and interior modifications</p>
                <p>Car detailing is the process of improving the condition of a vehicle's interior and exterior appearance. This involves the most thorough clean possible, any enhancement to deal with minor defects such as clear coat scratches, and protection to maintain the condition.</p>
            </div>
            <div class="card">
                <img class="servicepack" src="{{ url('assets/Images/servicepack.png') }}" alt="servicepack">
                <h3 class="service_title">Service Pack</h3>
                <p class="title_service">Components install</p>
                <p>Sticking to regular services periods is an essential part of vehicle ownership. A regular service assists in maintaining your vehicle’s performance, improves fuel economy and protects your vehicle in the long run. It can also improve resale value if a full-service history is recorded.
                    While many people tend to book their vehicles in at a specialist technician some of you are keen to take a stab at servicing your vehicle yourself. </p>
            </div>
            <div class="card">
                <img class="abs" src="{{ url('assets/Images/abs.png') }}" alt="abs">
                <h3 class="abs_title">Reduce stability control</h3>
                <p class="title_abs">Turn off ABS, and control systems</p>
                <p>Removing a wheel speed sensor will disable ABS—and sometimes, stability control. If your car has a yaw sensor, you can unplug that for results. You can also try simply unplugging the ABS module, though that could adversely affect your car's braking performance</p>
            </div>
            <div class="card">
                <img class="custom" src="{{ url('assets/Images/custom.png') }}" alt="custom">
                <h3 class="custom_title">Custom Performance</h3>
                <p class="title_custom">Stage 5</p>
                <p>Custom high compression big bore combination. It includes comprehensive headwork and aggressive cam. Requires larger throttle body & injectors as well as additional supportive mods. Would be considered fuel & tune sensitive.</p>
            </div>
            <div class="card">
                <img class="remap" src="{{ url('assets/Images/remap.png') }}" alt="remap">
                <h3 class="remap_title">Engine Remap</h3>
                <p class="title_remap">Different software</p>
                <p>Upgrading a modern car often starts with a remap. This is the process of uploading slightly different software to the computer that controls the engine. This controls the fuel, spark, timing, and turbo-boost of the engine. By adjusting these settings, more power can be unlocked from the engine.</p>
            </div>
            <div class="card">
                <img class="exhaust" src="{{ url('assets/Images/exhaust.png') }}" alt="exhaust">
                <h3 class="exhaust_title">Exhaust System</h3>
                <p class="title_exhaust">Increase Engine Power</p>
                <p>A cat-back exhaust is normally where you start to see power increases, even with stock or standard software. By opening up the rear section of the exhaust so more gas can flow through it, you’re increasing the amount of air that the turbo can pump through the engine. Derestricting the exhaust at the same time as upping the boost should see the benefits of both working together to give you even more power.</p>
            </div>
            <div class="card">
                <img class="chemical" src="{{ url('assets/Images/chemical.png') }}" alt="chemical">
                <h3 class="chemical_title">Chemical Cleaning</h3>
                <p class="title_chemical">Modern Cleaning System</p>
                <p>
                    Hydrocarbon-based solvent detergents are widely used in car washing because of their excellent dissolving properties. Detergents are typically composed of aliphatic, naphthenic and aromatic hydrocarbons. Aromatic hydrocarbons in particular are effective solvents, but they also pose the most significant health hazards.</p>
            </div>
        </div>
    </div>
@endsection
