module.exports = function() {
    'use strict';

    var context = this,
        cmd = context.require('./utils/cmd'),
        Q = context.require('q');

    this.task('init', function(logger) {
        if (arguments.length > 1) {
            throw new Error('Wrong argument');
        }

        logger.log('Updating composer...'.yellow);
        return cmd('composer', ['update']).then(function(stream) {
            console.log(stream[0]);
        });
    });

};
