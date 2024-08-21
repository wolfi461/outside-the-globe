function calcTime(time) {
    const timeObj = sepTime(time);
    let res = '';
    if (timeObj['h'] > 1) res += timeObj['h'] + ' שעות, ';
    else if (timeObj['h'] === 1) res += 'שעה, ';

    if (timeObj['m'] > 1) res += timeObj['m'] + ' דקות ו-';
    else if (timeObj['h'] === 1) res += ' דקה ו-';

    if(timeObj['s'] === 1) res += 'שניה';
    else res += timeObj['s'] + ' שניות';
    return res;
}

function sepTime(time) {	// מחשב זמן
    const res = {
        h: Math.floor(time / 3600),
        m: Math.floor(time / 60) % 60,
        s: time % 60
    };
    return res;
}