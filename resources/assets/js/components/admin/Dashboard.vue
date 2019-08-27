<template>
    <!-- Main content -->
    <section>
        <div class="content-header">
            <h1>
                Administration Dashboard
                <small>Optional description</small>
            </h1>
            <ol class="breadcrumb">
                <li><router-link to="/dashboard"><i class="fa fa-dashboard"></i> Dashboard</router-link></li>
                <li class="active">Home</li>
            </ol>
        </div>
        <div class="content container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <div class="card card-default">
                        <div class="card-header">Example Component</div>

                        <div class="card-body">
                            I'm an example component.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
