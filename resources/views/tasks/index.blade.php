<!-- resources/views/tasks/index.blade.php -->

@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="new-task">
        <div class="new-task__header">
            <p class="new-task__title">New Task</p>
        </div>
        <div class="new-task__content">
            <div class="panel-body">
                    <!-- Display Validation Errors -->
                @include('common.errors')

                <!-- New Task Form -->
                <form action="{{ url('task') }}" method="POST" class="new-task__form">
                {{ csrf_field() }}

                <!-- Task Name -->
                    <div class="new-task__group">
                        <label for="task-name" class="new-task__label">Task</label>
                        <input type="text" name="name" id="task-name" class="new-task__input">
                    </div>

                    <!-- Add Task Button -->
                    <div class="new-task__group">
                        <button type="submit" class="btn btn_theme_default btn_size_m btn_color_white btn_state_hover">
                            <span class="btn__text">Add Task</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- TODO: Current Tasks -->
    <!-- Current Tasks -->
    @if (count($tasks) > 0)
        <div class="current-task">
            <div class="current-task__header">
                <p class="current-task__title">Current Tasks</p>
            </div>

            <div class="current-task__content">
                <div class="current-task__label">Task</div>

                    @foreach ($tasks as $task)
                            <!-- Task Name -->
                                <div class="current-task__item">
                                    <div class="current-task__text">
                                        <div>{{ $task->name }}</div>
                                    </div>

                                    <!-- TODO: Delete Button -->
                                    <form class="current-task__form" action="{{ url('task/'.$task->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" id="delete-task-{{ $task->id }}" class="btn btn_theme_default btn_size_m btn_color_red btn_state_hover">
                                            <span class="btn__text">Delete</span>
                                        </button>
                                    </form>
                                </div>
                        @endforeach
                </div>
            </div>
        </div>
    @endif
@endsection