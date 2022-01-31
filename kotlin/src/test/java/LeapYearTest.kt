import org.junit.jupiter.api.BeforeEach
import org.junit.jupiter.api.Test
import org.junit.jupiter.params.ParameterizedTest
import org.junit.jupiter.params.provider.ValueSource
import kotlin.test.assertFalse
import kotlin.test.assertTrue

class LeapYearTest {

    private lateinit var validator: LeapYearValidator;

    @BeforeEach
    fun setup() {
        validator = LeapYearValidator()
    }
    ;
    @ParameterizedTest
    @ValueSource(ints = [4,8,12,16])
    fun `should return true when year is multiple of 4`(year: Int) {
        val isLeapYear: Boolean = validator.isLeapYear(year)

        assertTrue { isLeapYear }
    }

    @ParameterizedTest
    @ValueSource(ints = [1,2,3,5])
    fun `should return false when is not multiple of 4`(year: Int) {
        val isLeapYear: Boolean = validator.isLeapYear(year)

        assertFalse { isLeapYear }
    }

    @ParameterizedTest
    @ValueSource(ints = [100,200,300,500])
    fun `should return false when year is divisible by 100 but not 400`(year: Int) {
        val isLeapYear: Boolean = validator.isLeapYear(year)

        assertFalse { isLeapYear }
    }

    @ParameterizedTest
    @ValueSource(ints = [400,800,1200,1600])
    fun `should return false when year is divisible by 100 but and 400`() {
        val isLeapYear: Boolean = validator.isLeapYear(400)

        assertTrue { isLeapYear }
    }
}
