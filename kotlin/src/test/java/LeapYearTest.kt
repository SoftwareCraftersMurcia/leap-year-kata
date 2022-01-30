import org.junit.jupiter.api.Test
import kotlin.test.assertFalse
import kotlin.test.assertTrue

class LeapYearTest {

    @Test
    fun `should return true when year is 4`() {
        val validator = LeapYearValidator()

        val isLeapYear: Boolean = validator.isLeapYear(4)

        assertTrue { isLeapYear }
    }

    @Test
    fun `should return false when year is 3`() {
        val validator = LeapYearValidator()

        val isLeapYear: Boolean = validator.isLeapYear(3)

        assertFalse { isLeapYear }
    }

    @Test
    fun `should return false when year is 100`() {
        val validator = LeapYearValidator()

        val isLeapYear: Boolean = validator.isLeapYear(100)

        assertFalse { isLeapYear }
    }

    @Test
    fun `should return true when year is 400`() {
        val validator = LeapYearValidator()

        val isLeapYear: Boolean = validator.isLeapYear(400)

        assertTrue { isLeapYear }
    }
}
