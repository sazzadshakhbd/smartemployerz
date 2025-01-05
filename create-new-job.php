<!--  Heade -->
<?php include 'view/header.php'; ?>
<!-- Start Main Section -->
<main>
  <div class="container-fluid custom-width">
    <div class="row">
      <!-- Sidebar -->
      <?php include 'view/sidebar.php'; ?>

      <!-- Main Bar -->
      <div class="col-lg-9 main-wrapper px-0 responsive-height">
        <span class="humburger" onclick="openNav()">&#9776;</span>
        <div class="custom-space custom-space-form">
          <!-- Top Bar -->
          <?php include 'view/top-bar.php'; ?>

          <!-- Start New Job Form -->
          <form class="create-new-job-form form" id="msform">
            <div class="steper-wrapper">
              <div class="row">
                <div class="col-xl-12">
                  <div class="form-group mb-3">
                    <div class="form-title custom-border-bottom">
                      <h2 class="text-capitalize">Job Information</h2>
                      <p class="mb-0">
                        Update your photo and personal details here.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-xl-12">
                  <h3 class="title-bar mb-4">Job title and Location</h3>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group mx-md-4">
                        <label for="jobTitle" class="form-label">Job Title</label>
                        <input
                          type="text"
                          class="form-control"
                          id="jobTitle"
                          aria-describedby="jobTitle" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group ms-md-4">
                        <label class="form-label" for="numberOfEmployees">Job Level</label>
                        <select
                          class="form-select"
                          id="numberOfEmployees"
                          aria-label="Default select example">
                          <option value="1" selected>Entry Level</option>
                          <option value="2">Intermediate Level</option>
                          <option value="3">Advanced Level</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group me-md-4">
                        <label class="form-label" for="numberOfEmployees">Year of Experience (e.g.: 1-2 Years)</label>
                        <div class="d-flex gap-3">
                          <select
                            class="form-select"
                            id="MinValue"
                            aria-label="Default select example">
                            <option value="1" selected>Min</option>
                            <option value="2">Five</option>
                            <option value="3">Ten</option>
                          </select>
                          <select
                            class="form-select"
                            id="MaxValue"
                            aria-label="Default select example">
                            <option value="1" selected>Max</option>
                            <option value="2">Five</option>
                            <option value="3">Ten</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-xl-12">
                  <div class="title-bar-with-btn mb-4">
                    <h3 class="title-bar">Description</h3>
                    <button>
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="15"
                        viewBox="0 0 16 15"
                        fill="none">
                        <path
                          d="M8.32917 0.956239C8.41897 0.679846 8.80999 0.679847 8.8998 0.95624L9.65243 3.27259C9.69259 3.3962 9.80778 3.47989 9.93775 3.47989H12.3733C12.6639 3.47989 12.7848 3.85177 12.5496 4.02259L10.5792 5.45418C10.4741 5.53057 10.4301 5.66598 10.4703 5.78959L11.2229 8.10594C11.3127 8.38233 10.9963 8.61217 10.7612 8.44135L8.79082 7.00977C8.68567 6.93337 8.54329 6.93337 8.43815 7.00977L6.46774 8.44135C6.23263 8.61217 5.91628 8.38233 6.00609 8.10594L6.75872 5.78959C6.79888 5.66598 6.75488 5.53057 6.64974 5.45418L4.67933 4.02259C4.44421 3.85177 4.56505 3.47989 4.85566 3.47989H7.29122C7.42119 3.47989 7.53638 3.3962 7.57654 3.27259L8.32917 0.956239Z"
                          fill="#FCBD1C" />
                        <path
                          d="M3.40699 8.33905C3.4968 8.06266 3.88782 8.06266 3.97762 8.33905L4.45393 9.80496C4.49409 9.92857 4.60928 10.0123 4.73925 10.0123H6.2806C6.57121 10.0123 6.69205 10.3841 6.45693 10.555L5.20995 11.4609C5.10481 11.5373 5.06081 11.6728 5.10097 11.7964L5.57728 13.2623C5.66708 13.5387 5.35074 13.7685 5.11562 13.5977L3.86864 12.6917C3.7635 12.6153 3.62112 12.6153 3.51597 12.6917L2.26899 13.5977C2.03388 13.7685 1.71754 13.5387 1.80734 13.2623L2.28364 11.7964C2.32381 11.6728 2.27981 11.5373 2.17466 11.4609L0.927684 10.555C0.69257 10.3841 0.813402 10.0123 1.10402 10.0123H2.64537C2.77534 10.0123 2.89053 9.92857 2.93069 9.80496L3.40699 8.33905Z"
                          fill="#FCBD1C" />
                        <path
                          d="M13.3455 9.28072C13.4054 9.09646 13.6661 9.09646 13.726 9.28072L14.0435 10.258C14.0703 10.3404 14.1471 10.3962 14.2337 10.3962H15.2613C15.455 10.3962 15.5356 10.6441 15.3788 10.758L14.5475 11.362C14.4774 11.4129 14.4481 11.5032 14.4749 11.5856L14.7924 12.5629C14.8523 12.7471 14.6414 12.9004 14.4846 12.7865L13.6533 12.1825C13.5832 12.1316 13.4883 12.1316 13.4182 12.1825L12.5869 12.7865C12.4301 12.9004 12.2192 12.7471 12.2791 12.5629L12.5966 11.5856C12.6234 11.5032 12.5941 11.4129 12.524 11.362L11.6927 10.758C11.5359 10.6441 11.6165 10.3962 11.8102 10.3962H12.8378C12.9244 10.3962 13.0012 10.3404 13.028 10.258L13.3455 9.28072Z"
                          fill="#FCBD1C" />
                      </svg>
                      <span>Generate With Ai</span>
                    </button>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group mx-md-4">
                        <label for="floatingTextarea" class="form-label">Job Description</label>
                        <div class="form-floating">
                          <textarea
                            class="form-control"
                            id="floatingTextarea">
I'm a Product Designer based in Melbourne, Australia. I specialise in UX/UI design, brand strategy, and Webflow development.</textarea>
                        </div>
                        <div class="form-text">275 characters left</div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group mx-md-4">
                        <label for="floatingTextarea" class="form-label">Job Responsibilities</label>
                        <div class="form-floating">
                          <textarea
                            class="form-control"
                            id="floatingTextarea">
I'm a Product Designer based in Melbourne, Australia. I specialise in UX/UI design, brand strategy, and Webflow development.
                            </textarea>
                        </div>
                        <div class="form-text">275 characters left</div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group mx-md-4">
                        <label for="floatingTextarea" class="form-label">Job Requirement & Skills</label>
                        <div class="form-floating">
                          <textarea
                            class="form-control"
                            id="floatingTextarea">
                              . Lorem ipsum dolor sit amet consectetur. 
                              . Est tincidunt eget tellus proin augue. Amet gravida sagittis cursus nam 
                              . habitant. Nec venenatis velit in arcu. 
                              . Sed purus velit gravida amet dignissim venenatis.
                            </textarea>
                        </div>
                        <div class="form-text">275 characters left</div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group mx-md-4">
                        <label for="floatingTextarea" class="form-label">Employment Benefits</label>
                        <div class="form-floating">
                          <textarea
                            class="form-control"
                            id="floatingTextarea">
I'm a Product Designer based in Melbourne, Australia. I specialise in UX/UI design, brand strategy, and Webflow development.
                            </textarea>
                        </div>
                        <div class="form-text">275 characters left</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group custom-select2 mx-md-4">
                      <label class="form-label" for="countries">Job Location</label>
                      <svg
                        width="19"
                        height="19"
                        viewBox="0 0 20 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M5 7.5L10 12.5L15 7.5"
                          stroke="#343a40"
                          stroke-width="1.66667"
                          stroke-linecap="round"
                          stroke-linejoin="round" />
                      </svg>
                      <select
                        class="form-select"
                        aria-label="Default select example"
                        id="countries">
                        <option value="AF" data-capital="Kabul">
                          Afghanistan
                        </option>
                        <option value="AX" data-capital="Mariehamn">
                          Aland Islands
                        </option>
                        <option value="AL" data-capital="Tirana">
                          Albania
                        </option>
                        <option value="DZ" data-capital="Algiers">
                          Algeria
                        </option>
                        <option value="AS" data-capital="Pago Pago">
                          American Samoa
                        </option>
                        <option value="AD" data-capital="Andorra la Vella">
                          Andorra
                        </option>
                        <option value="AO" data-capital="Luanda">
                          Angola
                        </option>
                        <option value="AI" data-capital="The Valley">
                          Anguilla
                        </option>
                        <option value="AG" data-capital="St. John's">
                          Antigua and Barbuda
                        </option>
                        <option value="AR" data-capital="Buenos Aires">
                          Argentina
                        </option>
                        <option value="AM" data-capital="Yerevan">
                          Armenia
                        </option>
                        <option value="AW" data-capital="Oranjestad">
                          Aruba
                        </option>
                        <option value="AU" data-capital="Canberra">
                          Australia
                        </option>
                        <option value="AT" data-capital="Vienna">
                          Austria
                        </option>
                        <option value="AZ" data-capital="Baku">
                          Azerbaijan
                        </option>
                        <option value="BS" data-capital="Nassau">
                          Bahamas
                        </option>
                        <option value="BH" data-capital="Manama">
                          Bahrain
                        </option>
                        <option value="BD" data-capital="Dhaka">
                          Bangladesh
                        </option>
                        <option value="BB" data-capital="Bridgetown">
                          Barbados
                        </option>
                        <option value="BY" data-capital="Minsk">
                          Belarus
                        </option>
                        <option value="BE" data-capital="Brussels">
                          Belgium
                        </option>
                        <option value="BZ" data-capital="Belmopan">
                          Belize
                        </option>
                        <option value="BJ" data-capital="Porto-Novo">
                          Benin
                        </option>
                        <option value="BM" data-capital="Hamilton">
                          Bermuda
                        </option>
                        <option value="BT" data-capital="Thimphu">
                          Bhutan
                        </option>
                        <option value="BO" data-capital="Sucre">
                          Bolivia
                        </option>
                        <option value="BA" data-capital="Sarajevo">
                          Bosnia and Herzegovina
                        </option>
                        <option value="BW" data-capital="Gaborone">
                          Botswana
                        </option>
                        <option value="BR" data-capital="Brasília">
                          Brazil
                        </option>
                        <option value="IO" data-capital="Diego Garcia">
                          British Indian Ocean Territory
                        </option>
                        <option
                          value="BN"
                          data-capital="Bandar Seri Begawan">
                          Brunei Darussalam
                        </option>
                        <option value="BG" data-capital="Sofia">
                          Bulgaria
                        </option>
                        <option value="BF" data-capital="Ouagadougou">
                          Burkina Faso
                        </option>
                        <option value="BI" data-capital="Bujumbura">
                          Burundi
                        </option>
                        <option value="CV" data-capital="Praia">
                          Cabo Verde
                        </option>
                        <option value="KH" data-capital="Phnom Penh">
                          Cambodia
                        </option>
                        <option value="CM" data-capital="Yaoundé">
                          Cameroon
                        </option>
                        <option value="CA" data-capital="Ottawa">
                          Canada
                        </option>
                        <option value="KY" data-capital="George Town">
                          Cayman Islands
                        </option>
                        <option value="CF" data-capital="Bangui">
                          Central African Republic
                        </option>
                        <option value="TD" data-capital="N'Djamena">
                          Chad
                        </option>
                        <option value="CL" data-capital="Santiago">
                          Chile
                        </option>
                        <option value="CN" data-capital="Beijing">
                          China
                        </option>
                        <option value="CX" data-capital="Flying Fish Cove">
                          Christmas Island
                        </option>
                        <option value="CC" data-capital="West Island">
                          Cocos (Keeling) Islands
                        </option>
                        <option value="CO" data-capital="Bogotá">
                          Colombia
                        </option>
                        <option value="KM" data-capital="Moroni">
                          Comoros
                        </option>
                        <option value="CK" data-capital="Avarua">
                          Cook Islands
                        </option>
                        <option value="CR" data-capital="San José">
                          Costa Rica
                        </option>
                        <option value="HR" data-capital="Zagreb">
                          Croatia
                        </option>
                        <option value="CU" data-capital="Havana">
                          Cuba
                        </option>
                        <option value="CW" data-capital="Willemstad">
                          Curaçao
                        </option>
                        <option value="CY" data-capital="Nicosia">
                          Cyprus
                        </option>
                        <option value="CZ" data-capital="Prague">
                          Czech Republic
                        </option>
                        <option value="CI" data-capital="Yamoussoukro">
                          Côte d'Ivoire
                        </option>
                        <option value="CD" data-capital="Kinshasa">
                          Democratic Republic of the Congo
                        </option>
                        <option value="DK" data-capital="Copenhagen">
                          Denmark
                        </option>
                        <option value="DJ" data-capital="Djibouti">
                          Djibouti
                        </option>
                        <option value="DM" data-capital="Roseau">
                          Dominica
                        </option>
                        <option value="DO" data-capital="Santo Domingo">
                          Dominican Republic
                        </option>
                        <option value="EC" data-capital="Quito">
                          Ecuador
                        </option>
                        <option value="EG" data-capital="Cairo">
                          Egypt
                        </option>
                        <option value="SV" data-capital="San Salvador">
                          El Salvador
                        </option>
                        <option value="GQ" data-capital="Malabo">
                          Equatorial Guinea
                        </option>
                        <option value="ER" data-capital="Asmara">
                          Eritrea
                        </option>
                        <option value="EE" data-capital="Tallinn">
                          Estonia
                        </option>
                        <option value="ET" data-capital="Addis Ababa">
                          Ethiopia
                        </option>
                        <option value="FK" data-capital="Stanley">
                          Falkland Islands
                        </option>
                        <option value="FO" data-capital="Tórshavn">
                          Faroe Islands
                        </option>
                        <option value="FM" data-capital="Palikir">
                          Federated States of Micronesia
                        </option>
                        <option value="FJ" data-capital="Suva">Fiji</option>
                        <option value="FI" data-capital="Helsinki">
                          Finland
                        </option>
                        <option value="MK" data-capital="Skopje">
                          Former Yugoslav Republic of Macedonia
                        </option>
                        <option value="FR" data-capital="Paris">
                          France
                        </option>
                        <option value="PF" data-capital="Papeete">
                          French Polynesia
                        </option>
                        <option value="GA" data-capital="Libreville">
                          Gabon
                        </option>
                        <option value="GM" data-capital="Banjul">
                          Gambia
                        </option>
                        <option value="GE" data-capital="Tbilisi">
                          Georgia
                        </option>
                        <option value="DE" data-capital="Berlin">
                          Germany
                        </option>
                        <option value="GH" data-capital="Accra">
                          Ghana
                        </option>
                        <option value="GI" data-capital="Gibraltar">
                          Gibraltar
                        </option>
                        <option value="GR" data-capital="Athens">
                          Greece
                        </option>
                        <option value="GL" data-capital="Nuuk">
                          Greenland
                        </option>
                        <option value="GD" data-capital="St. George's">
                          Grenada
                        </option>
                        <option value="GU" data-capital="Hagåtña">
                          Guam
                        </option>
                        <option value="GT" data-capital="Guatemala City">
                          Guatemala
                        </option>
                        <option value="GG" data-capital="Saint Peter Port">
                          Guernsey
                        </option>
                        <option value="GN" data-capital="Conakry">
                          Guinea
                        </option>
                        <option value="GW" data-capital="Bissau">
                          Guinea-Bissau
                        </option>
                        <option value="GY" data-capital="Georgetown">
                          Guyana
                        </option>
                        <option value="HT" data-capital="Port-au-Prince">
                          Haiti
                        </option>
                        <option value="VA" data-capital="Vatican City">
                          Holy See
                        </option>
                        <option value="HN" data-capital="Tegucigalpa">
                          Honduras
                        </option>
                        <option value="HK" data-capital="Hong Kong">
                          Hong Kong
                        </option>
                        <option value="HU" data-capital="Budapest">
                          Hungary
                        </option>
                        <option value="IS" data-capital="Reykjavik">
                          Iceland
                        </option>
                        <option value="IN" data-capital="New Delhi">
                          India
                        </option>
                        <option value="ID" data-capital="Jakarta">
                          Indonesia
                        </option>
                        <option value="IR" data-capital="Tehran">
                          Iran
                        </option>
                        <option value="IQ" data-capital="Baghdad">
                          Iraq
                        </option>
                        <option value="IE" data-capital="Dublin">
                          Ireland
                        </option>
                        <option value="IM" data-capital="Douglas">
                          Isle of Man
                        </option>
                        <option value="IL" data-capital="Jerusalem">
                          Israel
                        </option>
                        <option value="IT" data-capital="Rome">
                          Italy
                        </option>
                        <option value="JM" data-capital="Kingston">
                          Jamaica
                        </option>
                        <option value="JP" data-capital="Tokyo">
                          Japan
                        </option>
                        <option value="JE" data-capital="Saint Helier">
                          Jersey
                        </option>
                        <option value="JO" data-capital="Amman">
                          Jordan
                        </option>
                        <option value="KZ" data-capital="Astana">
                          Kazakhstan
                        </option>
                        <option value="KE" data-capital="Nairobi">
                          Kenya
                        </option>
                        <option value="KI" data-capital="South Tarawa">
                          Kiribati
                        </option>
                        <option value="KW" data-capital="Kuwait City">
                          Kuwait
                        </option>
                        <option value="KG" data-capital="Bishkek">
                          Kyrgyzstan
                        </option>
                        <option value="LA" data-capital="Vientiane">
                          Laos
                        </option>
                        <option value="LV" data-capital="Riga">
                          Latvia
                        </option>
                        <option value="LB" data-capital="Beirut">
                          Lebanon
                        </option>
                        <option value="LS" data-capital="Maseru">
                          Lesotho
                        </option>
                        <option value="LR" data-capital="Monrovia">
                          Liberia
                        </option>
                        <option value="LY" data-capital="Tripoli">
                          Libya
                        </option>
                        <option value="LI" data-capital="Vaduz">
                          Liechtenstein
                        </option>
                        <option value="LT" data-capital="Vilnius">
                          Lithuania
                        </option>
                        <option value="LU" data-capital="Luxembourg City">
                          Luxembourg
                        </option>
                        <option value="MO" data-capital="Macau">
                          Macau
                        </option>
                        <option value="MG" data-capital="Antananarivo">
                          Madagascar
                        </option>
                        <option value="MW" data-capital="Lilongwe">
                          Malawi
                        </option>
                        <option value="MY" data-capital="Kuala Lumpur">
                          Malaysia
                        </option>
                        <option value="MV" data-capital="Malé">
                          Maldives
                        </option>
                        <option value="ML" data-capital="Bamako">
                          Mali
                        </option>
                        <option value="MT" data-capital="Valletta">
                          Malta
                        </option>
                        <option value="MH" data-capital="Majuro">
                          Marshall Islands
                        </option>
                        <option value="MQ" data-capital="Fort-de-France">
                          Martinique
                        </option>
                        <option value="MR" data-capital="Nouakchott">
                          Mauritania
                        </option>
                        <option value="MU" data-capital="Port Louis">
                          Mauritius
                        </option>
                        <option value="MX" data-capital="Mexico City">
                          Mexico
                        </option>
                        <option value="MD" data-capital="Chișinău">
                          Moldova
                        </option>
                        <option value="MC" data-capital="Monaco">
                          Monaco
                        </option>
                        <option value="MN" data-capital="Ulaanbaatar">
                          Mongolia
                        </option>
                        <option value="ME" data-capital="Podgorica">
                          Montenegro
                        </option>
                        <option
                          value="MS"
                          data-capital="Little Bay, Brades, Plymouth">
                          Montserrat
                        </option>
                        <option value="MA" data-capital="Rabat">
                          Morocco
                        </option>
                        <option value="MZ" data-capital="Maputo">
                          Mozambique
                        </option>
                        <option value="MM" data-capital="Naypyidaw">
                          Myanmar
                        </option>
                        <option value="NA" data-capital="Windhoek">
                          Namibia
                        </option>
                        <option value="NR" data-capital="Yaren District">
                          Nauru
                        </option>
                        <option value="NP" data-capital="Kathmandu">
                          Nepal
                        </option>
                        <option value="NL" data-capital="Amsterdam">
                          Netherlands
                        </option>
                        <option value="NZ" data-capital="Wellington">
                          New Zealand
                        </option>
                        <option value="NI" data-capital="Managua">
                          Nicaragua
                        </option>
                        <option value="NE" data-capital="Niamey">
                          Niger
                        </option>
                        <option value="NG" data-capital="Abuja">
                          Nigeria
                        </option>
                        <option value="NU" data-capital="Alofi">
                          Niue
                        </option>
                        <option value="NF" data-capital="Kingston">
                          Norfolk Island
                        </option>
                        <option value="KP" data-capital="Pyongyang">
                          North Korea
                        </option>
                        <option value="MP" data-capital="Capitol Hill">
                          Northern Mariana Islands
                        </option>
                        <option value="NO" data-capital="Oslo">
                          Norway
                        </option>
                        <option value="OM" data-capital="Muscat">
                          Oman
                        </option>
                        <option value="PK" data-capital="Islamabad">
                          Pakistan
                        </option>
                        <option value="PW" data-capital="Ngerulmud">
                          Palau
                        </option>
                        <option value="PA" data-capital="Panama City">
                          Panama
                        </option>
                        <option value="PG" data-capital="Port Moresby">
                          Papua New Guinea
                        </option>
                        <option value="PY" data-capital="Asunción">
                          Paraguay
                        </option>
                        <option value="PE" data-capital="Lima">Peru</option>
                        <option value="PH" data-capital="Manila">
                          Philippines
                        </option>
                        <option value="PN" data-capital="Adamstown">
                          Pitcairn
                        </option>
                        <option value="PL" data-capital="Warsaw">
                          Poland
                        </option>
                        <option value="PT" data-capital="Lisbon">
                          Portugal
                        </option>
                        <option value="PR" data-capital="San Juan">
                          Puerto Rico
                        </option>
                        <option value="QA" data-capital="Doha">
                          Qatar
                        </option>
                        <option value="CG" data-capital="Brazzaville">
                          Republic of the Congo
                        </option>
                        <option value="RO" data-capital="Bucharest">
                          Romania
                        </option>
                        <option value="RU" data-capital="Moscow">
                          Russia
                        </option>
                        <option value="RW" data-capital="Kigali">
                          Rwanda
                        </option>
                        <option value="BL" data-capital="Gustavia">
                          Saint Barthélemy
                        </option>
                        <option value="KN" data-capital="Basseterre">
                          Saint Kitts and Nevis
                        </option>
                        <option value="LC" data-capital="Castries">
                          Saint Lucia
                        </option>
                        <option value="VC" data-capital="Kingstown">
                          Saint Vincent and the Grenadines
                        </option>
                        <option value="WS" data-capital="Apia">
                          Samoa
                        </option>
                        <option value="SM" data-capital="San Marino">
                          San Marino
                        </option>
                        <option value="ST" data-capital="São Tomé">
                          Sao Tome and Principe
                        </option>
                        <option value="SA" data-capital="Riyadh">
                          Saudi Arabia
                        </option>
                        <option value="SN" data-capital="Dakar">
                          Senegal
                        </option>
                        <option value="RS" data-capital="Belgrade">
                          Serbia
                        </option>
                        <option value="SC" data-capital="Victoria">
                          Seychelles
                        </option>
                        <option value="SL" data-capital="Freetown">
                          Sierra Leone
                        </option>
                        <option value="SG" data-capital="Singapore">
                          Singapore
                        </option>
                        <option value="SX" data-capital="Philipsburg">
                          Sint Maarten
                        </option>
                        <option value="SK" data-capital="Bratislava">
                          Slovakia
                        </option>
                        <option value="SI" data-capital="Ljubljana">
                          Slovenia
                        </option>
                        <option value="SB" data-capital="Honiara">
                          Solomon Islands
                        </option>
                        <option value="SO" data-capital="Mogadishu">
                          Somalia
                        </option>
                        <option value="ZA" data-capital="Pretoria">
                          South Africa
                        </option>
                        <option value="KR" data-capital="Seoul">
                          South Korea
                        </option>
                        <option value="SS" data-capital="Juba">
                          South Sudan
                        </option>
                        <option value="ES" data-capital="Madrid">
                          Spain
                        </option>
                        <option
                          value="LK"
                          data-capital="Sri Jayawardenepura Kotte, Colombo">
                          Sri Lanka
                        </option>
                        <option value="PS" data-capital="Ramallah">
                          State of Palestine
                        </option>
                        <option value="SD" data-capital="Khartoum">
                          Sudan
                        </option>
                        <option value="SR" data-capital="Paramaribo">
                          Suriname
                        </option>
                        <option value="SZ" data-capital="Lobamba, Mbabane">
                          Swaziland
                        </option>
                        <option value="SE" data-capital="Stockholm">
                          Sweden
                        </option>
                        <option value="CH" data-capital="Bern">
                          Switzerland
                        </option>
                        <option value="SY" data-capital="Damascus">
                          Syrian Arab Republic
                        </option>
                        <option value="TW" data-capital="Taipei">
                          Taiwan
                        </option>
                        <option value="TJ" data-capital="Dushanbe">
                          Tajikistan
                        </option>
                        <option value="TZ" data-capital="Dodoma">
                          Tanzania
                        </option>
                        <option value="TH" data-capital="Bangkok">
                          Thailand
                        </option>
                        <option value="TL" data-capital="Dili">
                          Timor-Leste
                        </option>
                        <option value="TG" data-capital="Lomé">Togo</option>
                        <option
                          value="TK"
                          data-capital="Nukunonu, Atafu,Tokelau">
                          Tokelau
                        </option>
                        <option value="TO" data-capital="Nukuʻalofa">
                          Tonga
                        </option>
                        <option value="TT" data-capital="Port of Spain">
                          Trinidad and Tobago
                        </option>
                        <option value="TN" data-capital="Tunis">
                          Tunisia
                        </option>
                        <option value="TR" data-capital="Ankara">
                          Turkey
                        </option>
                        <option value="TM" data-capital="Ashgabat">
                          Turkmenistan
                        </option>
                        <option value="TC" data-capital="Cockburn Town">
                          Turks and Caicos Islands
                        </option>
                        <option value="TV" data-capital="Funafuti">
                          Tuvalu
                        </option>
                        <option value="UG" data-capital="Kampala">
                          Uganda
                        </option>
                        <option value="UA" data-capital="Kiev">
                          Ukraine
                        </option>
                        <option value="AE" data-capital="Abu Dhabi">
                          United Arab Emirates
                        </option>
                        <option value="GB" data-capital="London">
                          United Kingdom
                        </option>
                        <option value="US" data-capital="Washington, D.C.">
                          United States of America
                        </option>
                        <option value="UY" data-capital="Montevideo">
                          Uruguay
                        </option>
                        <option value="UZ" data-capital="Tashkent">
                          Uzbekistan
                        </option>
                        <option value="VU" data-capital="Port Vila">
                          Vanuatu
                        </option>
                        <option value="VE" data-capital="Caracas">
                          Venezuela
                        </option>
                        <option value="VN" data-capital="Hanoi">
                          Vietnam
                        </option>
                        <option value="VG" data-capital="Road Town">
                          Virgin Islands (British)
                        </option>
                        <option value="VI" data-capital="Charlotte Amalie">
                          Virgin Islands (U.S.)
                        </option>
                        <option value="EH" data-capital="Laayoune">
                          Western Sahara
                        </option>
                        <option value="YE" data-capital="Sana'a">
                          Yemen
                        </option>
                        <option value="ZM" data-capital="Lusaka">
                          Zambia
                        </option>
                        <option value="ZW" data-capital="Harare">
                          Zimbabwe
                        </option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-xl-12">
                  <h3 class="title-bar mb-4">
                    Company industry and Job function
                  </h3>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group ms-md-4">
                        <label for="CompanyIndustry" class="form-label">Company industry</label>
                        <input
                          type="text"
                          placeholder="Education Management"
                          class="form-control"
                          id="CompanyIndustry"
                          aria-describedby="CompanyIndustry" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group me-md-4">
                        <label for="jobFunction" class="form-label">Job function</label>
                        <input
                          type="text"
                          placeholder="Job function"
                          class="form-control"
                          id="jobFunction"
                          aria-describedby="jobFunction" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-xl-12">
                  <div class="title-bar-with-switch mb-4">
                    <h3 class="title-bar">Employment Details</h3>
                    <div class="form-check form-switch">
                      <div>
                        <label
                          class="form-check-label"
                          for="flexSwitchCheckChecked">Monthly</label>
                      </div>
                      <input
                        class="form-check-input"
                        type="checkbox"
                        role="switch"
                        id="flexSwitchCheckChecked"
                        checked />
                      <label
                        class="form-check-label"
                        for="flexSwitchCheckChecked">Yearly</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5 col-lg-6">
                      <div class="form-group ms-md-4">
                        <label for="FullTime" class="form-label">Employment type</label>
                        <input
                          type="text"
                          placeholder="Full Time"
                          class="form-control"
                          id="FullTime"
                          aria-describedby="FullTime" />
                      </div>
                    </div>
                    <div class="col-md-7 col-lg-6">
                      <div class="form-group me-md-4">
                        <label for="writeHere" class="form-label">Specialized or Experience Area</label>
                        <input
                          type="text"
                          placeholder="Write Here"
                          class="form-control"
                          id="writeHere"
                          aria-describedby="writeHere" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-xl-12">
                  <div class="title-bar-with-switch mb-4">
                    <h3 class="title-bar">Salary Range</h3>
                  </div>
                  <div class="row mb-4">
                    <div class="col-md-6 col-lg-3">
                      <div class="form-group ms-md-4">
                        <label for="FromToFirst" class="form-label">From</label>
                        <input
                          type="text"
                          placeholder="Full Time"
                          class="form-control"
                          id="FromToFirst"
                          aria-describedby="FromToFirst" />
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <div class="form-group me-md-4 me-lg-0">
                        <label for="FromToLast" class="form-label">To</label>
                        <input
                          type="text"
                          placeholder="Write Here"
                          class="form-control"
                          id="FromToLast"
                          aria-describedby="FromToLast" />
                      </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                      <div class="form-group me-md-4 ms-md-4 ms-lg-0">
                        <label class="form-label" for="Currency">Currency</label>
                        <select
                          class="form-select"
                          id="Currency"
                          aria-label="Default select example">
                          <option value="1" selected>
                            Bangladeshi Taka(BDT)
                          </option>
                          <option value="2">Intermediate Level</option>
                          <option value="3">Advanced Level</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-4">
                    <div class="col-md-12">
                      <div class="form-check form-switch ms-md-4">
                        <input
                          class="form-check-input me-2"
                          type="checkbox"
                          role="switch"
                          id="flex2SwitchCheckChecked"
                          checked />
                        <span class="d-block">Hide Company Information</span>
                        <label
                          class="form-check-label ps-1"
                          for="flex2SwitchCheckChecked">I’m open and available for freelance work.</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group mx-md-4">
                        <label class="form-label" for="CompanyName">Alternative Company Name</label>
                        <select
                          class="form-select"
                          id="CompanyName"
                          aria-label="Default select example">
                          <option value="1" selected>BCC</option>
                          <option value="2">BXL</option>
                          <option value="3">CNN</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <button type="button" class="next btn-form btn-form-continue">
                Continue
              </button>
              <button type="button" class="btn-form btn-default me-2">
                Save
              </button>
              <button type="button" class="btn-form btn-default me-2">
                Cancel
              </button>
            </div>
            <div class="steper-wrapper">
              <div class="row">
                <div class="col-xl-12">
                  <div class="form-group mb-3">
                    <div class="form-title custom-border-bottom">
                      <h2 class="text-capitalize">Candidate Reqirement</h2>
                      <p class="mb-0">
                        Update your photo and personal details here.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-md-12">
                  <div class="form-group me-md-4">
                    <label class="form-label" for="IndustryExpert">Business Area</label>
                    <select
                      class="form-select"
                      id="IndustryExpert"
                      aria-label="Default select example">
                      <option value="1" selected></option>
                      <option value="2">Example-1</option>
                      <option value="3">Example-2</option>
                      <option value="4">Example-3</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label" for="IndustryExpert">Level of Education</label>
                    <select
                      class="form-select"
                      id="IndustryExpert"
                      aria-label="Default select example">
                      <option value="1">Level One</option>
                      <option value="2">Level Two</option>
                      <option value="3">Level Three</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group me-md-4">
                    <label class="form-label" for="IndustryExpert">Degree</label>
                    <select
                      class="form-select"
                      id="IndustryExpert"
                      aria-label="Default select example">
                      <option value="1">Masters</option>
                      <option value="2">Arts</option>
                      <option value="3">Diploma</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group me-md-4">
                    <label for="skillOne" class="form-label">Major / Concentration Subject</label>
                    <input
                      type="text"
                      class="form-control"
                      id="skillOne"
                      aria-describedby="skillOne" />
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group me-md-4">
                    <label for="floatingTextarea" class="form-label">Additional Academic Requirement</label>
                    <div class="form-floating">
                      <textarea class="form-control" id="floatingTextarea">
I'm a Product Designer based in Melbourne, Australia. I specialise in UX/UI design, brand strategy, and Webflow development.
                          </textarea>
                    </div>
                    <div class="form-text">275 characters left</div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label" for="Workplace">Workplace / Workstation</label>
                    <select
                      class="form-select"
                      id="Workplace"
                      aria-label="Default select example">
                      <option value="1" selected>Work From Home</option>
                      <option value="2">Remote</option>
                      <option value="3">Official</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group me-md-4">
                    <label class="form-label" for="Nationality">Nationality</label>
                    <select
                      class="form-select"
                      id="Nationality"
                      aria-label="Default select example">
                      <option value="1">Bangladeshi</option>
                      <option value="2">Indian</option>
                      <option value="3">Pakistani</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-label" for="Gender">Gender</label>
                    <select
                      class="form-select"
                      id="Gender"
                      aria-label="Default select example">
                      <option value="1">Male</option>
                      <option value="2">Female</option>
                      <option value="3">Others</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group me-md-4">
                    <label class="form-label" for="AgeOfRange">Age Range</label>
                    <div class="d-flex gap-3">
                      <select
                        class="form-select"
                        id="MinValue"
                        aria-label="Default select example">
                        <option value="1" selected>From</option>
                        <option value="2">Five</option>
                        <option value="3">Ten</option>
                      </select>
                      <select
                        class="form-select"
                        id="MaxValue"
                        aria-label="Default select example">
                        <option value="1" selected>To</option>
                        <option value="2">Five</option>
                        <option value="3">Ten</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group me-md-4">
                    <label for="Certifications" class="form-label">Training & Certification</label>
                    <input
                      type="text"
                      class="form-control"
                      id="Certifications"
                      aria-describedby="Certifications" />
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group me-md-4">
                    <label for="Specialities" class="form-label">Specialties</label>
                    <input
                      type="text"
                      class="form-control"
                      id="Specialities"
                      aria-describedby="Specialities" />
                  </div>
                </div>
              </div>
              <a
                href="#"
                class="text-decoration-underline custom-links ms-md-0">Customize Application Form</a>
              <button
                type="button"
                class="btn-form btn-form-continue"
                data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                Preview
              </button>

              <button type="button" class="btn-form btn-default me-2">
                Save
              </button>
              <button
                type="button"
                class="previous btn-form btn-default me-2">
                Back
              </button>
            </div>
          </form>
          <!-- End New Job Form -->
        </div>
        <!-- Bottom Footer -->
        <?php include 'view/bottom-footer.php'; ?>
      </div>
    </div>
  </div>
</main>
<!-- End Main Section -->

<?php include 'view/footer.php'; ?>
<!-- Modal -->
<div
  class="modal custom-modal fade"
  id="exampleModal"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div
    class="modal-dialog modal-xl modal-dialog-scrollable modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="top-header">
          <div class="brand-details">
            <div class="brand-logo">
              <img
                src="./img/brand.png"
                alt="Brand Logo"
                class="img-fluid" />
            </div>
            <div class="brand-info">
              <h1>Brand Manager</h1>
              <h2>Part Time</h2>
              <p>
                Lorem ipsum dolor sit amet consectetur. Nunc nec proin ut
                leo. Mauris ut eu non est blandit. Imperdiet urna eu at
                nullam quisque auctor justo nunc.
              </p>
            </div>
          </div>
          <div class="action-btn">
            <a class="text-decoration-none" type="button" href="#">Apply Now</a>
          </div>
        </div>
        <div class="details">
          <h3 class="mt-5 mb-4">Job Details :</h3>
          <section class="mb-4">
            <dl>
              <dt>Job Type :</dt>
              <dd>Part Time</dd>
            </dl>
            <dl>
              <dt>Experience :</dt>
              <dd>5-6 years</dd>
            </dl>
            <dl>
              <dt>Location :</dt>
              <dd>Dhaka, Bangladesh</dd>
            </dl>
          </section>
          <section class="mb-4">
            <h4>Description :</h4>
            <p>
              WellDev is looking for a Senior UI & UX Designer who will be
              responsible for leading different projects for designing
              interactive and user friendly interfaces for state of the art
              products of our clients. If you are eager to design world
              class user experience for the global market, we’d like to meet
              you. Ultimately, you will be creating both functional and
              appealing features that address our clients’ needs and help us
              grow our customer base.
            </p>
          </section>
          <section class="mb-4">
            <dl>
              <dt>Salary :</dt>
              <dd>8,000 Taka - 12,000 Taka</dd>
            </dl>
          </section>
          <section class="mb-4">
            <h4>Job Requirements & Skills :</h4>
            <ul class="job-skills">
              <li>Minimum of 30 hours per week</li>
              <li>
                Previous experience as a Chef De Partie/Demi Chef in a busy
                a la carte operation
              </li>
              <li>
                Flexible to work rostered shifts, including weekends, late
                nights and public holidays.
              </li>
              <li>Minimum of 30 hours per week</li>
              <li>
                Previous experience as a Chef De Partie/Demi Chef in a busy
                a la carte operation
              </li>
              <li>
                Flexible to work rostered shifts, including weekends, late
                nights and public holidays.
              </li>
            </ul>
          </section>
          <section class="mb-4">
            <dl>
              <dt>Educational Requirements :</dt>
              <dd>NA</dd>
            </dl>
          </section>
          <section class="mb-4">
            <dl>
              <dt>Training & Certifications :</dt>
              <dd>NA</dd>
            </dl>
          </section>
          <section class="mb-4">
            <h4>Compensation & Benefits :</h4>
            <ul>
              <li>
                Discounts at our hotels, restaurants and spas across our
                network
              </li>
              <li>Staff, family and friends rates at our hotels</li>
              <li>Meals on duty, staff parking and uniform provided</li>
              <li>Minimum of 30 hours per week</li>
              <li>Excellent reward & recognition events</li>
              <li>Service and anniversary gifts and benefits</li>
              <li>
                Wellbeing programme including Health insurance discounts
              </li>
              <li>
                Paid training and individual Employee Development Plans
              </li>
              <li>
                Training towards NZQA qualifications and our very own online
                digital learning platform
              </li>
              <li>
                Free Life Insurance, Digital Will & Best Doctors teleservice
                after 3 months of employment
              </li>
            </ul>
          </section>
          <section class="mb-4">
            <h4>Additional Information :</h4>
            <ul class="add-info">
              <li>Gender : Male</li>
              <li>Nationality : Bangladeshi</li>
              <li>Specialties : Na</li>
              <li>Industry : IT/ITES</li>
              <li>Age Range : 25 - 35</li>
              <li>Workplace : Work From Home</li>
            </ul>
          </section>
        </div>
        <div class="modal-end">
          <button data-bs-toggle="modal" data-bs-target="#exampleModal2" type="button" class="btn-default">Ready To Publish</button>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel2">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</body>

</html>