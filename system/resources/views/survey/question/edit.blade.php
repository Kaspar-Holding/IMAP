@extends('layouts.app')
@section('pageTitle','Payment Methods')
@section('content')
    <div class="container-fluid">
        <div class="row column_title">
          <div class="col-md-12">
            <div class="page_title">
              <h2>Edit Question</h2>
            </div>
          </div>
        </div>
         <!-- row -->
        <div class="row">
            <!-- table section -->
          <div class="col-md-12">
            <div class="white_shd full margin_bottom_30">
              <div class="full graph_head">
                <div class="heading1 margin_0">
                  
                </div>
              </div>
              @php
                $num = 1;
                $answers = json_decode($question->answers);
              @endphp
              <form class="container-fluid" action="{{route('update_question')}}" method="POST" style="padding:30px; padding-bottom:40px;">
                @csrf
                <input type="hidden" name="id" value="{{ $question->id }}">
                <input type="hidden" name="survey_id" value="{{ $question->survey_id }}">
                <div>
                  <label class="form-label">Question</label>
                  <input type="text" name="survey_question" class="form-control" value="{{$question->survey_question}}" >
                </div>
                <br>
                <div class="clonedata">
                    @foreach($answers as $ans)
                    <div class="row abcd">
                      <div class="col-lg-8">
                        <div class="example-1">
                          <label class="form-label">Answer</label>
                          <div class="example-2">
                            <input type="text" name="answers[]" class="form-control checks" value="{{ $ans }}">
                            <br>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <button type="button" class="removemore btn btn-sm btn-inverse btn-outline-danger mt-4">Delete</button>
                      </div>
                    </div>
                        @php
                        $num++;
                      @endphp
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <button type="button" class="addmore btn btn-sm btn-inverse btn-outline-success mb-4">Add More</button>
                    </div>
                </div>
                <div>
                  <label class="form-label">Question Description</label>
                  <textarea class="form-control" name="survey_question_description" rows="4"> {{$question->survey_question_description}}</textarea>
                </div>
                <br>
                <div class="row" style="padding-left:30px; padding-top:10px;">
                  <button type="submit" class="btn btn-primary my-button col-md-2 link-light col-sm-4">Update</button>
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@stop