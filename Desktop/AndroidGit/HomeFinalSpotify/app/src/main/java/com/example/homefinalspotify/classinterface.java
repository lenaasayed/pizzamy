package com.example.homefinalspotify;

import retrofit2.Call;
import retrofit2.http.GET;
import retrofit2.http.Headers;

public interface classinterface
{
@GET("v1/browse/new-releases?country=SE&limit=10&offset=0")
@Headers("Authorization: Bearer BQBKpvj9JohCkE_ihgsxi8bfuqjbwt6S9hVG7aPeSvHropb0y5Ub9GE_w1RVPF01iAf7IcnVGhwCH_vU2ZAry7jDH5pCEJ975SXh8we20gw464zMwQ6Ez5IvLNbUcXT_EksAXcp4WKOdqRn9odNR4Hh1n_g3X6kiMMjUd0EqDaeP2Z6iPminH8RY8uOJfGMjfBJALZWvglhUicf38KWmP81WK9Yk7OggViEcdnfpkshByFefoJhFL861B1r0mUpmNF7QVwKQbuKDO55wCsraQyQaULkYfO1R-Q")
public Call<CategoryModel> getCategory();

}
