window.chartColors = {
    red: 'rgb(255,0,0)',
    orange: 'rgb(255, 159, 64)',
    yellow: 'rgb(255,255,0)',
    green: 'rgb(0, 102, 0)',
    blue: 'rgb(0, 0, 102)',
    purple: 'rgb(128,0,128)',
    grey: 'rgb(128,128,0)',
    aqua: 'rgb(0,255,255)'
};

window.randomScalingFactor = function () {
    return (Math.random() > 0.5 ? 1.0 : -1.0) * Math.round(Math.random() * 100);
}