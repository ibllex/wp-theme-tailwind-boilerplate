// This file only includes the project config file if it exists. Prevents errors in build in remote environments where the
// project file isn't available.

const fs = require('fs');

// If we need to add default/fallback values at any point, add them here.
let config = {};

if (fs.existsSync('./project.json')) {
    config = require('../../../project.json');
}

module.exports = config;
