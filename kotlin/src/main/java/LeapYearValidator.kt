class LeapYearValidator {
    fun isLeapYear(year: Int): Boolean {
        return year % 4 == 0 && (year % 100 != 0)
    }

}
