<?php $__env->startSection('pagination'); ?>
    ##parent-placeholder-31fbb9d2e0d13b29c5296acd65d75c9fe1ceaee8##
    <div v-for="note in notes" class="note">
        <p>
            <span class="date">{{ note.created_at | formatDate}}</span>
            <span class="name">{{ note.author }}</span>
        </p>
        <p>
            {{ note.text }}
        </p>
    </div>
    ##parent-placeholder-31fbb9d2e0d13b29c5296acd65d75c9fe1ceaee8##
<?php $__env->stopSection(); ?>
<?php echo $__env->make('message.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/guestbook (laravel)/resources/views/message/show.blade.php ENDPATH**/ ?>