<template>
    <div style="background-color: ghostwhite">
        <section class="section">
            <div class="container">
                <nav class="navbar">
                    <a href="#temperature" class="navbar-item"><span class="icon"><i class="fa fa-thermometer-full"></i></span>Temperature</a>
                    <a href="#occupancy" class="navbar-item"><span class="icon"><i class="fa fa-user-circle"></i></span>Occupancy</a>
                    <a href="#electric" class="navbar-item"><span class="icon"><i class="fa fa-bolt"></i></span>Electric use</a>
                    <a href="#heating" class="navbar-item"><span class="icon"><i class="fa fa-fire"></i></span>Heating use</a>
                    <a href="#brightness" class="navbar-item"><span class="icon"><i class="fa fa-sun-o"></i></span>Brightness</a>
                </nav>
            </div>
        </section>
        <div class="container" id="temperature">
            <div class="columns">
                <div class="column">
                    <section class="section has-ribbon-left">
                        <div class="ribbon is-danger">Inside General Temperature</div>
                        <div class="columns">
                            <div class="column">
                                <chartjs-line :datalabel="'Temperature (ºC)'" :labels="data.labels" :data="data.general.themperature" :fill="true" :bind="true"></chartjs-line>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="column">
                    <section class="section has-ribbon-left">
                        <div class="ribbon is-warning">Outside Temperature</div>
                        <div class="columns">
                            <div class="column">
                                <chartjs-line :datalabel="'Temperature (ºC)'" :labels="data.labels" :data="data.outside.themperature" :fill="true" :bind="true"></chartjs-line>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="container" style="background-color: ghostwhite">
            <section class="section has-ribbon-left">
                <div class="ribbon is-link">Temperature by room</div>
                <div class="columns is-multiline has-text-centered">
                    <div class="column">
                        <chartjs-line :datalabel="'Temperature (ºC)'" :labels="data.labels" :data="data.room1.themperature" :fill="true" :bind="true"></chartjs-line>
                        Room #1
                    </div>
                    <div class="column">
                        <chartjs-line :datalabel="'Temperature (ºC)'" :labels="data.labels" :data="data.room2.themperature" :fill="true" :bind="true"></chartjs-line>
                        Room #2
                    </div>
                    <div class="column">
                        <chartjs-line :datalabel="'Temperature (ºC)'" :labels="data.labels" :data="data.room3.themperature" :fill="true" :bind="true"></chartjs-line>
                        Room #3
                    </div>
                    <div class="column">
                        <chartjs-line :datalabel="'Temperature (ºC)'" :labels="data.labels" :data="data.room4.themperature" :fill="true" :bind="true"></chartjs-line>
                        Room #4
                    </div>
                    <div class="column">
                        <chartjs-line :datalabel="'Temperature (ºC)'" :labels="data.labels" :data="data.kitchen.themperature" :fill="true" :bind="true"></chartjs-line>
                        Kitchen
                    </div>
                    <div class="column">
                        <chartjs-line :datalabel="'Temperature (ºC)'" :labels="data.labels" :data="data.livingroom.themperature" :fill="true" :bind="true"></chartjs-line>
                        Living room
                    </div>
                    <div class="column">
                        <chartjs-line :datalabel="'Temperature (ºC)'" :labels="data.labels" :data="data.bathroom1.themperature" :fill="true" :bind="true"></chartjs-line>
                        Bathroom #1
                    </div>
                    <div class="column">
                        <chartjs-line :datalabel="'Temperature (ºC)'" :labels="data.labels" :data="data.bathroom2.themperature" :fill="true" :bind="true"></chartjs-line>
                        Bathroom #2
                    </div>
                </div>
            </section>
        </div>
        <div class="container">
            <section class="section">
                <hr>
            </section>
        </div>
        <div class="container" id="occupancy">
            <div class="columns">
                <div class="column">
                    <section class="section has-ribbon-left">
                        <div class="ribbon is-danger">Inside Occupancy</div>
                        <div class="columns">
                            <div class="column">
                                <chartjs-line :datalabel="'People'" :fill="true" :data="data.general.occupancy" :labels="data.labels" :bind="true"></chartjs-line>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="column">
                    <section class="section has-ribbon-left">
                        <div class="ribbon is-warning">Outside Occupancy</div>
                        <div class="columns">
                            <div class="column">
                                <chartjs-line :datalabel="'People'" :fill="true" :data="data.outside.occupancy" :labels="data.labels" :bind="true"></chartjs-line>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="container" style="background-color: ghostwhite">
            <section class="section has-ribbon-left">
                <div class="ribbon is-link">Occupancy by room</div>
                <div class="columns is-multiline has-text-centered">
                    <div class="column">
                        <chartjs-line :datalabel="'People'" :fill="true" :data="data.room1.occupancy" :labels="data.labels" :bind="true"></chartjs-line>
                        Room #1
                    </div>
                    <div class="column">
                        <chartjs-line :datalabel="'People'" :fill="true" :data="data.room2.occupancy" :labels="data.labels" :bind="true"></chartjs-line>
                        Room #2
                    </div>
                    <div class="column">
                        <chartjs-line :datalabel="'People'" :fill="true" :data="data.room3.occupancy" :labels="data.labels" :bind="true"></chartjs-line>
                        Room #3
                    </div>
                    <div class="column">
                        <chartjs-line :datalabel="'People'" :fill="true" :data="data.room4.occupancy" :labels="data.labels" :bind="true"></chartjs-line>
                        Room #4
                    </div>
                    <div class="column">
                        <chartjs-line :datalabel="'People'" :fill="true" :data="data.kitchen.occupancy" :labels="data.labels" :bind="true"></chartjs-line>
                        Kitchen
                    </div>
                    <div class="column">
                        <chartjs-line :datalabel="'People'" :fill="true" :data="data.livingroom.occupancy" :labels="data.labels" :bind="true"></chartjs-line>
                        Living room
                    </div>
                    <div class="column">
                        <chartjs-line :datalabel="'People'" :fill="true" :data="data.bathroom1.occupancy" :labels="data.labels" :bind="true"></chartjs-line>
                        Bathroom #1
                    </div>
                    <div class="column">
                        <chartjs-line :datalabel="'People'" :fill="true" :data="data.bathroom2.occupancy" :labels="data.labels" :bind="true"></chartjs-line>
                        Bathroom #2
                    </div>
                </div>
            </section>
        </div>
        <div class="container">
            <section class="section">
                <hr>
            </section>
        </div>
        <div class="container" id="electric">
            <div class="columns">
                <div class="column">
                    <section class="section has-ribbon-left">
                        <div class="ribbon is-danger">Inside Electric Usage</div>
                        <div class="columns">
                            <div class="column">
                                <chartjs-line :datalabel="'KW'" :fill="true" :data="data.general.electric" :labels="data.labels" :bind="true"></chartjs-line>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="column">
                    <section class="section has-ribbon-left">
                        <div class="ribbon is-warning">Outside Electric Usage</div>
                        <div class="columns">
                            <div class="column">
                                <chartjs-line :datalabel="'KW'" :fill="true" :data="data.outside.electric" :labels="data.labels" :bind="true"></chartjs-line>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="container" style="background-color: ghostwhite">
            <section class="section has-ribbon-left">
                <div class="ribbon is-link">Electric usage by room</div>
                <div class="columns is-multiline">
                    <div class="column">
                        <chartjs-line :datalabel="'KW'" :fill="true" :data="data.room1.electric" :labels="data.labels" :bind="true"></chartjs-line>
                        Room #1
                    </div>
                    <div class="column">
                        <chartjs-line :datalabel="'KW'" :fill="true" :data="data.room2.electric" :labels="data.labels" :bind="true"></chartjs-line>
                        Room #2
                    </div>
                    <div class="column">
                        <chartjs-line :datalabel="'KW'" :fill="true" :data="data.room3.electric" :labels="data.labels" :bind="true"></chartjs-line>
                        Room #3
                    </div>
                    <div class="column">
                        <chartjs-line :datalabel="'KW'" :fill="true" :data="data.room4.electric" :labels="data.labels" :bind="true"></chartjs-line>
                        Room #4
                    </div>
                    <div class="column">
                        <chartjs-line :datalabel="'KW'" :fill="true" :data="data.kitchen.electric" :labels="data.labels" :bind="true"></chartjs-line>
                        Kitchen
                    </div>
                    <div class="column">
                        <chartjs-line :datalabel="'KW'" :fill="true" :data="data.livingroom.electric" :labels="data.labels" :bind="true"></chartjs-line>
                        Living room
                    </div>
                    <div class="column">
                        <chartjs-line :datalabel="'KW'" :fill="true" :data="data.bathroom1.electric" :labels="data.labels" :bind="true"></chartjs-line>
                        Bathroom #1
                    </div>
                    <div class="column">
                        <chartjs-line :datalabel="'KW'" :fill="true" :data="data.bathroom2.electric" :labels="data.labels" :bind="true"></chartjs-line>
                        Bathroom #2
                    </div>
                </div>
            </section>
        </div>
        <div class="container">
            <section class="section">
                <hr>
            </section>
        </div>
        <div class="container" id="heating">
            <div class="columns">
                <div class="column">
                    <section class="section has-ribbon-left">
                        <div class="ribbon is-danger">Inside Heating Usage</div>
                        <div class="columns">
                            <div class="column">
                                <chartjs-line :datalabel="'KW'" :fill="true" :data="data.general.heating" :labels="data.labels" :bind="true"></chartjs-line>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="column">
                    <section class="section has-ribbon-left">
                        <div class="ribbon is-warning">Outside Heating Usage</div>
                        <div class="columns">
                            <div class="column">
                                <chartjs-line :datalabel="'KW'" :fill="true" :data="data.outside.heating" :labels="data.labels" :bind="true"></chartjs-line>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="container" style="background-color: ghostwhite">
            <section class="section has-ribbon-left">
                <div class="ribbon is-link">Heating usage by room</div>
                <div class="columns is-multiline">
                    <div class="column">
                        <chartjs-line :datalabel="'KW'" :fill="true" :data="data.room1.heating" :labels="data.labels" :bind="true"></chartjs-line>
                        Room #1
                    </div>
                    <div class="column">
                        <chartjs-line :datalabel="'KW'" :fill="true" :data="data.room2.heating" :labels="data.labels" :bind="true"></chartjs-line>
                        Room #2
                    </div>
                    <div class="column">
                        <chartjs-line :datalabel="'KW'" :fill="true" :data="data.room3.heating" :labels="data.labels" :bind="true"></chartjs-line>
                        Room #3
                    </div>
                    <div class="column">
                        <chartjs-line :datalabel="'KW'" :fill="true" :data="data.room4.heating" :labels="data.labels" :bind="true"></chartjs-line>
                        Room #4
                    </div>
                    <div class="column">
                        <chartjs-line :datalabel="'KW'" :fill="true" :data="data.kitchen.heating" :labels="data.labels" :bind="true"></chartjs-line>
                        Kitchen
                    </div>
                    <div class="column">
                        <chartjs-line :datalabel="'KW'" :fill="true" :data="data.livingroom.heating" :labels="data.labels" :bind="true"></chartjs-line>
                        Living room
                    </div>
                    <div class="column">
                        <chartjs-line :datalabel="'KW'" :fill="true" :data="data.bathroom1.heating" :labels="data.labels" :bind="true"></chartjs-line>
                        Bathroom #1
                    </div>
                    <div class="column">
                        <chartjs-line :datalabel="'KW'" :fill="true" :data="data.bathroom2.heating" :labels="data.labels" :bind="true"></chartjs-line>
                        Bathroom #2
                    </div>
                </div>
            </section>
        </div>
        <div class="container">
            <section class="section">
                <hr>
            </section>
        </div>
        <div class="container" id="brightness">
            <div class="columns">
                <div class="column">
                    <section class="section has-ribbon-left">
                        <div class="ribbon is-danger">Inside Brightness</div>
                        <div class="columns">
                            <div class="column">
                                <chartjs-line :datalabel="'LM'" :fill="true" :data="data.general.brightness" :labels="data.labels" :bind="true"></chartjs-line>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="column">
                    <section class="section has-ribbon-left">
                        <div class="ribbon is-warning">Outside Brightness</div>
                        <div class="columns">
                            <div class="column">
                                <chartjs-line :datalabel="'LM'" :fill="true" :data="data.outside.brightness" :labels="data.labels" :bind="true"></chartjs-line>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="container" style="background-color: ghostwhite">
            <section class="section has-ribbon-left">
                <div class="ribbon is-link">Brightness by room</div>
                <div class="columns is-multiline">
                    <div class="column">
                        <chartjs-line :datalabel="'LM'" :fill="true" :data="data.room1.brightness" :labels="data.labels" :bind="true"></chartjs-line>
                        Room #1
                    </div>
                    <div class="column">
                        <chartjs-line :datalabel="'LM'" :fill="true" :data="data.room2.brightness" :labels="data.labels" :bind="true"></chartjs-line>
                        Room #2
                    </div>
                    <div class="column">
                        <chartjs-line :datalabel="'LM'" :fill="true" :data="data.room3.brightness" :labels="data.labels" :bind="true"></chartjs-line>
                        Room #3
                    </div>
                    <div class="column">
                        <chartjs-line :datalabel="'LM'" :fill="true" :data="data.room4.brightness" :labels="data.labels" :bind="true"></chartjs-line>
                        Room #4
                    </div>
                    <div class="column">
                        <chartjs-line :datalabel="'LM'" :fill="true" :data="data.kitchen.brightness" :labels="data.labels" :bind="true"></chartjs-line>
                        Kitchen
                    </div>
                    <div class="column">
                        <chartjs-line :datalabel="'LM'" :fill="true" :data="data.livingroom.brightness" :labels="data.labels" :bind="true"></chartjs-line>
                        Living room
                    </div>
                    <div class="column">
                        <chartjs-line :datalabel="'LM'" :fill="true" :data="data.bathroom1.brightness" :labels="data.labels" :bind="true"></chartjs-line>
                        Bathroom #1
                    </div>
                    <div class="column">
                        <chartjs-line :datalabel="'LM'" :fill="true" :data="data.bathroom2.brightness" :labels="data.labels" :bind="true"></chartjs-line>
                        Bathroom #2
                    </div>
                </div>
            </section>
        </div>
    </div>
</template>

<script>
    export default {
        methods: {
            loadData: function () {
                $.getJSON('https://graph.api.smartthings.com/api/smartapps/installations/8b3deddc-a4c7-4696-bae6-ab301af916f6/info?access_token=8930557e-bdcb-49c3-923c-f3b98c7abc7d', function (response) {
                    this.data.general.themperature.push(response.general.themperature);
                    this.data.general.humity.push(response.general.humity);
                    this.data.general.occupancy.push(response.general.occupancy);
                    this.data.general.electric.push(response.general.electric);
                    this.data.general.heating.push(response.general.heating);
                    this.data.general.brightness.push(response.general.brightness);
                    this.data.outside.themperature.push(response.outside.themperature);
                    this.data.outside.humity.push(response.outside.humity);
                    this.data.outside.occupancy.push(response.outside.occupancy);
                    this.data.outside.electric.push(response.outside.electric);
                    this.data.outside.heating.push(response.outside.heating);
                    this.data.outside.brightness.push(response.outside.brightness);
                    this.data.room1.themperature.push(response.room1.themperature);
                    this.data.room1.humity.push(response.room1.humity);
                    this.data.room1.occupancy.push(response.room1.occupancy);
                    this.data.room1.electric.push(response.room1.electric);
                    this.data.room1.heating.push(response.room1.heating);
                    this.data.room1.brightness.push(response.room1.brightness);
                    this.data.room2.themperature.push(response.room2.themperature);
                    this.data.room2.humity.push(response.room2.humity);
                    this.data.room2.occupancy.push(response.room2.occupancy);
                    this.data.room2.electric.push(response.room2.electric);
                    this.data.room2.heating.push(response.room2.heating);
                    this.data.room2.brightness.push(response.room2.brightness);
                    this.data.room3.themperature.push(response.room3.themperature);
                    this.data.room3.humity.push(response.room3.humity);
                    this.data.room3.occupancy.push(response.room3.occupancy);
                    this.data.room3.electric.push(response.room3.electric);
                    this.data.room3.heating.push(response.room3.heating);
                    this.data.room3.brightness.push(response.room3.brightness);
                    this.data.room4.themperature.push(response.room4.themperature);
                    this.data.room4.humity.push(response.room4.humity);
                    this.data.room4.occupancy.push(response.room4.occupancy);
                    this.data.room4.electric.push(response.room4.electric);
                    this.data.room4.heating.push(response.room4.heating);
                    this.data.room4.brightness.push(response.room4.brightness);
                    this.data.kitchen.themperature.push(response.kitchen.themperature);
                    this.data.kitchen.humity.push(response.kitchen.humity);
                    this.data.kitchen.occupancy.push(response.kitchen.occupancy);
                    this.data.kitchen.electric.push(response.kitchen.electric);
                    this.data.kitchen.heating.push(response.kitchen.heating);
                    this.data.kitchen.brightness.push(response.kitchen.brightness);
                    this.data.livingroom.themperature.push(response.livingroom.themperature);
                    this.data.livingroom.humity.push(response.livingroom.humity);
                    this.data.livingroom.occupancy.push(response.livingroom.occupancy);
                    this.data.livingroom.electric.push(response.livingroom.electric);
                    this.data.livingroom.heating.push(response.livingroom.heating);
                    this.data.livingroom.brightness.push(response.livingroom.brightness);
                    this.data.bathroom1.themperature.push(response.bathroom1.themperature);
                    this.data.bathroom1.humity.push(response.bathroom1.humity);
                    this.data.bathroom1.occupancy.push(response.bathroom1.occupancy);
                    this.data.bathroom1.electric.push(response.bathroom1.electric);
                    this.data.bathroom1.heating.push(response.bathroom1.heating);
                    this.data.bathroom1.brightness.push(response.bathroom1.brightness);
                    this.data.bathroom2.themperature.push(response.bathroom2.themperature);
                    this.data.bathroom2.humity.push(response.bathroom2.humity);
                    this.data.bathroom2.occupancy.push(response.bathroom2.occupancy);
                    this.data.bathroom2.electric.push(response.bathroom2.electric);
                    this.data.bathroom2.heating.push(response.bathroom2.heating);
                    this.data.bathroom2.brightness.push(response.bathroom2.brightness);
                }.bind(this));
            }
        },
        mounted: function () {
            this.loadData();

            setInterval(function () {
                this.loadData();
            }.bind(this), 1000);
        },
        data () {
            return {
                data: {
                    labels: [
                        //'00:00', '00:30', '01:00', '01:30', '02:00', '02:30', '03:00', '03:30', '04:00', '04:30', '05:00', '05:30', '06:00', '06:30', '07:00', '07:30',
                        '08:00', '08:30', '09:00', '09:30', '10:00', '10:30', '11:00', '11:30', '12:00', '12:30', '13:00', '13:30', '14:00', '14:30', '15:00', '15:30', '16:00',
                        '16:30', '17:00', '17:30', '18:00', '18:30', '19:00', '19:30', '20:00', '20:30', '21:00', '21:30', '22:00', '22:30', '23:00', '23:30'
                    ],

                    general: {
                        themperature: [20, 21, 22, 20],
                        humity: [50, 40, 90, 60],
                        occupancy: [0, 2, 1, 4],
                        electric: [10, 20, 10, 30],
                        heating: [10, 20, 10, 30],
                        brightness: [100, 200, 100, 300]
                    },

                    outside: {
                        themperature: [20, 21, 22, 20],
                        humity: [50, 40, 90, 60],
                        occupancy: [0, 2, 1, 4],
                        electric: [10, 20, 10, 30],
                        heating: [10, 20, 10, 30],
                        brightness: [100, 200, 100, 300]
                    },

                    room1: {
                        themperature: [20, 21, 22, 20],
                        humity: [50, 40, 90, 60],
                        occupancy: [0, 2, 1, 4],
                        electric: [10, 20, 10, 30],
                        heating: [10, 20, 10, 30],
                        brightness: [100, 200, 100, 300]
                    },

                    room2: {
                        themperature: [20, 21, 22, 20],
                        humity: [50, 40, 90, 60],
                        occupancy: [0, 2, 1, 4],
                        electric: [10, 20, 10, 30],
                        heating: [10, 20, 10, 30],
                        brightness: [100, 200, 100, 300]
                    },

                    room3: {
                        themperature: [20, 21, 22, 20],
                        humity: [50, 40, 90, 60],
                        occupancy: [0, 2, 1, 4],
                        electric: [10, 20, 10, 30],
                        heating: [10, 20, 10, 30],
                        brightness: [100, 200, 100, 300]
                    },

                    room4: {
                        themperature: [20, 21, 22, 20],
                        humity: [50, 40, 90, 60],
                        occupancy: [0, 2, 1, 4],
                        electric: [10, 20, 10, 30],
                        heating: [10, 20, 10, 30],
                        brightness: [100, 200, 100, 300]
                    },

                    kitchen: {
                        themperature: [20, 21, 22, 20],
                        humity: [50, 40, 90, 60],
                        occupancy: [0, 2, 1, 4],
                        electric: [10, 20, 10, 30],
                        heating: [10, 20, 10, 30],
                        brightness: [100, 200, 100, 300]
                    },

                    livingroom: {
                        themperature: [20, 21, 22, 20],
                        humity: [50, 40, 90, 60],
                        occupancy: [0, 2, 1, 4],
                        electric: [10, 20, 10, 30],
                        heating: [10, 20, 10, 30],
                        brightness: [100, 200, 100, 300]
                    },

                    bathroom1: {
                        themperature: [20, 21, 22, 20],
                        humity: [50, 40, 90, 60],
                        occupancy: [0, 2, 1, 4],
                        electric: [10, 20, 10, 30],
                        heating: [10, 20, 10, 30],
                        brightness: [100, 200, 100, 300]
                    },

                    bathroom2: {
                        themperature: [20, 21, 22, 20],
                        humity: [50, 40, 90, 60],
                        occupancy: [0, 2, 1, 4],
                        electric: [10, 20, 10, 30],
                        heating: [10, 20, 10, 30],
                        brightness: [100, 200, 100, 300]
                    }
                }
            }
        }
    }
</script>