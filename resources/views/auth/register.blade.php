@extends('Frontend.app')

@section('hcontent')
<div class="container" style="padding-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="avatar" class="col-md-4 col-form-label text-md-right mt-4">Body Structure</label>

                            <div class="col-md-6">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label>Age</label>
                                      <select id="inputState" class="form-control @error('age') is-invalid @enderror" name="age" required>
                                        <option></option>
                                        <option>18</option>
                                        <option>19</option>
                                        <option>20</option>
                                        <option>21</option>
                                        <option>22</option>
                                        <option>23</option>
                                        <option>24</option>
                                        <option>25</option>
                                        <option>26</option>
                                        <option>27</option>
                                        <option>28</option>
                                        <option>29</option>
                                        <option>30</option>
                                        <option>31</option>
                                        <option>32</option>
                                        <option>33</option>
                                        <option>34</option>
                                        <option>35</option>
                                        <option>36</option>
                                        <option>37</option>
                                        <option>38</option>
                                        <option>39</option>
                                        <option>40</option>
                                        <option>41</option>
                                        <option>42</option>
                                        <option>43</option>
                                        <option>44</option>
                                        <option>45</option>
                                        <option>46</option>
                                        <option>47</option>
                                        <option>48</option>
                                        <option>49</option>
                                        <option>50</option>
                                        <option>51</option>
                                        <option>52</option>
                                        <option>53</option>
                                        <option>54</option>
                                        <option>55</option>
                                        <option>56</option>
                                        <option>57</option>
                                        <option>58</option>
                                        <option>59</option>
                                        <option>60</option>
                                      </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label>Height</label>
                                      <select id="inputState" class="form-control @error('height') is-invalid @enderror" name="height" required>
                                        <option></option>
                                        <option>4ft</option>
                                        <option>4ft 1in</option>
                                        <option>4ft 2in</option>
                                        <option>4ft 3in</option>
                                        <option>4ft 4in</option>
                                        <option>4ft 5in</option>
                                        <option>4ft 6in</option>
                                        <option>4ft 7in</option>
                                        <option>4ft 8in</option>
                                        <option>4ft 9in</option>
                                        <option>4ft 10in</option>
                                        <option>4ft 11in</option>
                                        <option>5ft</option>
                                        <option>5ft 1in</option>
                                        <option>5ft 2in</option>
                                        <option>5ft 3in</option>
                                        <option>5ft 4in</option>
                                        <option>5ft 5in</option>
                                        <option>5ft 6in</option>
                                        <option>5ft 7in</option>
                                        <option>5ft 8in</option>
                                        <option>5ft 9in</option>
                                        <option>5ft 10in</option>
                                        <option>5ft 11in</option>
                                        <option>6ft</option>
                                        <option>6ft 1in</option>
                                        <option>6ft 2in</option>
                                        <option>6ft 3in</option>
                                        <option>6ft 4in</option>
                                        <option>6ft 5in</option>
                                        <option>6ft 6in</option>
                                        <option>6ft 7in</option>
                                        <option>6ft 8in</option>
                                        <option>6ft 9in</option>
                                        <option>6ft 10in</option>
                                        <option>6ft 11in</option>
                                       </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">Gender</label>
                            <div class="col-md-6">
                                <div class="form-group">
                                      <select id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender" required>
                                        <option></option>
                                        <option>Male</option>
                                        <option>Female</option>
                                       </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="occupation" class="col-md-4 col-form-label text-md-right">occupation</label>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select id="occupation" class="form-control @error('occupation') is-invalid @enderror" name="occupation" required>
                                        <option value="">--- Select Occupation ---</option>
                                        <optgroup label="Accounting, Banking &amp; Finance"></optgroup>
                                        <option>Accounting Professional</option>
                                        <option>Banking Professional</option>
                                        <option>Chartered Accountant</option>
                                        <option>Finance Professional</option>
                                        <option>Investment Professional</option>
                                        <option>Accounting &amp; Finance (Others)</option>

                                        <optgroup label="Administration &amp; HR"></optgroup>
                                        <option>Admin Professional</option>
                                        <option>Human Resources Professional</option>

                                        <optgroup label="Advertising, Media &amp; Entertainment"></optgroup>
                                        <option>Actor</option>
                                        <option>Advertising Professional</option>
                                        <option>Entertainment Professional</option>
                                        <option>Event Manager</option>
                                        <option>Journalist</option>
                                        <option>Media Professional</option>
                                        <option>Public Relations Professional</option>

                                        <optgroup label="Agriculture"></optgroup>
                                        <option value="4#Agricultural Professional">Agricultural Professional</option>

                                        <optgroup label="Airline &amp; Aviation"></optgroup>
                                        <option>Air Hostess / Flight Attendant</option>
                                        <option>Pilot</option>
                                        <option>Airline Professional</option>

                                        <optgroup label="Architecture &amp; Design"></optgroup>
                                        <option>Architect</option>
                                        <option>Interior Designer</option>

                                        <optgroup label="Artists &amp; Animators"></optgroup>
                                        <option>Animator</option>
                                        <option>Artist</option>

                                        <optgroup label="Beauty &amp; Fashion"></optgroup>
                                        <option>Beautician</option>
                                        <option>Fashion Designer</option>

                                        <optgroup label="Defense"></optgroup>
                                        <option>Airforce</option>
                                        <option value="9#Army">Army</option>
                                        <option value="9#Navy">Navy</option>
                                        <option>Defense Services (Others)</option>

                                        <optgroup label="Education &amp; Training"></optgroup>
                                        <option>Lecturer</option>
                                        <option>Professor</option>
                                        <option>Teacher</option>

                                        <optgroup label="Engineering"></optgroup>
                                        <option>Civil Engineer</option>
                                        <option>Electronics / Telecom Engineer</option>
                                        <option>Mechanical / Production Engineer</option>
                                        <option>Engineer (Non IT)</option>

                                        <optgroup label="IT &amp; Software Engineering"></optgroup>
                                        <option>Software Engineer / Programmer</option>
                                        <option>Software Consultant</option>
                                        <option>Hardware &amp; Networking professional</option>
                                        <option>Database Administrator</option>
                                        <option>Web / UX Designers / Graphics Designers</option>
                                        <option>Computer Operator</option>
                                        <option>Computers / IT</option>
                                        <option>Software Professional (Others)</option>

                                        <optgroup label="Legal"></optgroup>
                                        <option>Lawyer</option>
                                        <option>Legal Assistant</option>
                                        <option>Legal Professional (Others)</option>

                                        <optgroup label="Medical &amp; Healthcare"></optgroup>
                                        <option>Doctor</option>
                                        <option>Dentist</option>
                                        <option>Nurse</option>
                                        <option>Pharmacist</option>
                                        <option>Psychologist</option>
                                        <option>Therapist</option>
                                        <option>Medical / Healthcare Professional</option>

                                        <optgroup label="Sales &amp; Marketing"></optgroup>
                                        <option>Marketing Professional</option>
                                        <option>Sales Professional</option>

                                        <optgroup label="Business &amp; Others"></optgroup>
                                        <option>Business Owner / Entrepreneur</option>
                                        <option>Consultant / Supervisor</option>
                                        <option>Politician</option>
                                        <option>Sportsman</option>
                                        <option>Travel &amp; Transport Professional</option>
                                        <option>Writer</option>
                                        <option>Not Defined</option>

                                        <optgroup label="Not Working"></optgroup>
                                        <option>Student</option>
                                        <option>Not Working</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="avatar" class="col-md-4 col-form-label text-md-right">Image</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" required>

                                @error('avatar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
