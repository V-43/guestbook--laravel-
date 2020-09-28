<?php $__env->startSection('content'); ?>
    <h1>Гостевая книга</h1>
    <div id="pagination">
        <?php $__env->startSection('pagination'); ?>
            <div>
                <nav>
                    <ul class="pagination">
                        <li v-if="currPage==1" class="disabled">
                            <span aria-hidden="true">&laquo;</span>
                        </li>
                        <li v-else>
                            <a href="#" aria-label="Previous" @click.prevent="getPage(1)">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li v-for="i in lastPage" :class="{active: currPage==i}">
                            <a href="#" @click.prevent="getPage(i)">{{ i }} </a>
                        </li>
                        <li v-if="currPage==lastPage" class="disabled">
                            <span aria-hidden="true">&raquo;</span>
                        </li>
                        <li v-else>
                            <a href="#" aria-label="Next" @click.prevent="getPage(lastPage)">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        <?php echo $__env->yieldSection(); ?>
        <?php echo $__env->make('message.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('message.vuejs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/guestbook (laravel)/resources/views/message/content.blade.php ENDPATH**/ ?>