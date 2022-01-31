class LeapYearValidator {
    fun isLeapYear(year: Int): Boolean {
        return year % 4 == 0 && divisibleByOneHundredAndFourHundred(year)
    }

    private fun divisibleByOneHundredAndFourHundred(year: Int) = (year % 100 != 0 || year % 400 == 0)

}
